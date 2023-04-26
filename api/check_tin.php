<?php

    use model\Tin\Tin;
    
    $data=json_decode(file_get_contents("php://input"));

    $NewRequest = new Tin;
    $result = $NewRequest->__check_tin($data);

    print_r(json_encode($result));


