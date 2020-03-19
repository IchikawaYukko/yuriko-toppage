<?php
$loc_ipv4 = filter_input(INPUT_GET, 'ipv4', FILTER_SANITIZE_URL);
$loc_ipv6 = filter_input(INPUT_GET, 'ipv6', FILTER_SANITIZE_URL);

if(strpos($loc_ipv4, ':')) {
        header('HTTP/1.1 404');
        exit;
}
//echo strlen($loc_ipv4); exit;
if(!strlen($loc_ipv4)) {
        header('HTTP/1.1 404');
        exit;
}
header("Location: $loc_ipv4", TRUE, 302);
