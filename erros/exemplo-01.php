<?php

function manipula_erro($code, $message, $file, $Line){

    echo json_encode(array(
        "code"=>$code,
        "message"=>$message,
        "file"=>$file,
        "Line"=>$Line
    ));

}

set_error_handler("manipula_erro");

echo 100/0;


?>