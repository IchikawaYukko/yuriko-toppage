<?php
$loc_ipv6 = filter_input(INPUT_GET, 'ipv6', FILTER_SANITIZE_URL);
$loc_ipv4 = filter_input(INPUT_GET, 'ipv4', FILTER_SANITIZE_URL);
if(strpos($loc_ipv4, ':') || strpos($loc_ipv6, ':')) {
    header($_SERVER["SERVER_PROTOCOL"].'404');
    exit;
}
if(!strlen($loc_ipv4) || !strlen($loc_ipv6)) {
    header($_SERVER["SERVER_PROTOCOL"].'404');
    exit;
}
if ($_SERVER['REQUEST_METHOD'] == 'GET' || $_SERVER['REQUEST_METHOD'] == 'HEAD') {
    if (filter_var($_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) {
        header("Location: $loc_ipv6", TRUE, 302);
    } else {
        header("Location: $loc_ipv4", TRUE, 302);
    }
}
