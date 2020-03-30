<?php
$loc_ipv4 = filter_input(INPUT_GET, 'ipv4', FILTER_SANITIZE_URL);
$loc_ipv6 = filter_input(INPUT_GET, 'ipv6', FILTER_SANITIZE_URL);

function is_same_origin($location) {
    if (strpos($location, ':')){
        return false;
    }
    return true;
}

if (!strlen($loc_ipv4) || !strlen($loc_ipv6)) {
    header($_SERVER["SERVER_PROTOCOL"].' 400', TRUE, 400);
    exit;
}
if (!is_same_origin($loc_ipv4) || !is_same_origin($loc_ipv6)) {
    header($_SERVER["SERVER_PROTOCOL"].' 404', TRUE, 404);
    exit;
}
if ($_SERVER['REQUEST_METHOD'] == 'GET' || $_SERVER['REQUEST_METHOD'] == 'HEAD') {
    if (filter_var($_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) {
        header("Location: $loc_ipv6", TRUE, 302);
    } else {
        header("Location: $loc_ipv4", TRUE, 302);
    }
}
