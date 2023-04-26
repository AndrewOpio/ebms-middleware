<?php

    namespace model\Auth;
    use model\App;

    class Auth extends App
    {   //logging into ebms
        public function __login()
        {
            $data=[];
            $data["username"] = "ws400000197600134";
            $data["password"] = "9-J\\^>qX";
            $token = "";
            $url = $this->Base."/login";
            $response = post_data_to_url($url, $data, $token);
            return $response;
        }
    }