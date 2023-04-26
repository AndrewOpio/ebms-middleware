<?php

    function require_api_headers(): void
    {
        header('Access-Control-Allow-Credentials: true');
        header('Authorization: Bearer ');
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: POST");
        header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method,Access-Control-Request-Headers, Authorization, Source");
        header('Content-Type: application/json');
        $method = $_SERVER['REQUEST_METHOD'];
        if ($method == "OPTIONS") {
            header('Access-Control-Allow-Origin: *');
            header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method,Access-Control-Request-Headers, Authorization, Source");
            header("HTTP/1.1 200 OK");
            die();
        }
    }
    
    
    function get_request_name($uri_depth=0)
    {
        $url=$_SERVER['REQUEST_URI'];
        $clean_url=explode("?", $url);
        $url=$clean_url[0];
        $request = explode("/", $url);
        $parts=[];
        foreach($request as $key=>$value)
        {
            if($key>$uri_depth)
            {
                $parts[]=$value;
            }
        }
        $request=implode("/", $parts);
        return $request;
    }

    
    function post_data_to_url($url, $data, $token)
    {  
        $json = json_encode($data);
        $headers = array();
        $headers[] = 'Content-Type: application/json';
        $headers[] =  'Authorization: Bearer '.$token;
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"POST");
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); // Do not send to screen
        curl_setopt($ch, CURLOPT_USERAGENT, 'ABACUS');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $response=curl_exec($ch);
        curl_close($ch);
        $response=json_decode($response);
        return $response;
    }
