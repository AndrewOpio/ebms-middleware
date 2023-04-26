<?php

    namespace model\Tin;
    use model\App;
    use model\Auth\Auth;

    class Tin extends App
    {   //Checking tin number
        public function __check_tin($data)
        {
            $NewRequest = new Auth;
            $result = $NewRequest->__login();
            $token = $result->result->token;
            $url = $this->Base."/checkTIN";
            $response = post_data_to_url($url, $data, $token);
            return $response;
        }
    }