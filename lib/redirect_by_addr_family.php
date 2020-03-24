<?php
$loc_ipv4 = filter_input(INPUT_GET, 'ipv4', FILTER_SANITIZE_URL);
$loc_ipv6 = filter_input(INPUT_GET, 'ipv6', FILTER_SANITIZE_URL);

function is_same_origin($ipv4, $ipv6) {
    if (strpos($ipv4, ':') || strpos($ipv6, ':')){
        return true;
    }
    return false;
}

if (is_same_origin($loc_ipv4, $loc_ipv6)) {
    header($_SERVER["SERVER_PROTOCOL"].'404');
    exit;
}
if (!strlen($loc_ipv4) || !strlen($loc_ipv6)) {
    header($_SERVER["SERVER_PROTOCOL"].'400');
    exit;
}
if ($_SERVER['REQUEST_METHOD'] == 'GET' || $_SERVER['REQUEST_METHOD'] == 'HEAD') {
    if (filter_var($_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) {
        header("Location: $loc_ipv6", TRUE, 302);
    } else {
        header("Location: $loc_ipv4", TRUE, 302);
    }
}
