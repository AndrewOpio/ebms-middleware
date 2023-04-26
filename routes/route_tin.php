<?php
    switch($request):
        case "check_tin"://check tin route
                include_once "api/check_tin.php";//Check tin Endpoint
                exit;
            break;
    endswitch;
