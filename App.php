<?php
/**
 * THIS IS THE APPLICATION ROUTER
 * 
 * ALL ENDPOINTS SHOULD BE INCLUDED IN THE api FOLDER
 */
    include_once "include/autoloader.php";
    include_once "include/functions.php";
    $request=get_request_name($uri_depth=1);
    
    include_once "routes/route_invoice.php";
    include_once "routes/route_tin.php";

    include_once "api/404.php";
?>