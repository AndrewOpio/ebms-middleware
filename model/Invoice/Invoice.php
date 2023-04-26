<?php

    namespace model\Invoice;
    use model\App;
    use model\Auth\Auth;

    class Invoice extends App
    {   //Adding invoice to database
        public function __add_invoice($data)
        {
            $NewRequest = new Auth;
            $result = $NewRequest->__login();
            $token = $result->result->token;
            $url = $this->Base."/addInvoice";
            $response = post_data_to_url($url, $data, $token);
            return $response;
        }

        //Getting invoice from database
        public function __get_invoice($data)
        {
            $NewRequest = new Auth;
            $result = $NewRequest->__login();
            $token = $result->result->token;
            $url = $this->Base."/getInvoice";
            $response = post_data_to_url($url, $data, $token);
            return $response;
        }

    }