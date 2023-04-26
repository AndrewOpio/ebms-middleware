<?php

    use model\Invoice\Invoice;
    
    $data=json_decode(file_get_contents("php://input"));

    $NewRequest = new Invoice;
    $result = $NewRequest->__add_invoice($data);

    print_r(json_encode($result));

