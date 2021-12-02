<script src="https://www.google.com/recaptcha/api.js"></script>


<?php

$email = $_POST["inputEmail"];

//var_dump($email);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.google.com.br/recaptcha/api/siteverify");
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
    "secret"=>"6LfLnHMdAAAAACY7E63nPFEqjMrHHZjv0wCzZfSV",
    "response"=>$_POST["g-recaptcha-response"],
    "remoteip"=>$_SERVER["REMOTE_ADDR"]
)));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$recaptcha = json_decode(curl_exec($ch), true);

curl_close($ch);

if($recaptcha["sucess"]=== true){

    echo "ok:" . $_POST["inputEmail"];

}else {
    header("Location: exemplo-04.php");
}


?>