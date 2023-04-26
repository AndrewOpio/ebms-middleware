<?php
    switch($request):
        case "get_invoice"://get invoice route
                include_once "api/get_invoice.php";//Get invoice Endpoint
                exit;
            break;
            
        case "add_invoice"://add invoice route
                include_once "api/add_invoice.php";//Add invoice Endpoint
                exit;
            break;
    endswitch;
