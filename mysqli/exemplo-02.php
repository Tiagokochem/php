<?php
$conn = new mysqli("localhost", "root", "", "dbphp7");

if($conn->connect_error){
    echo "Error: " . $conn->connect_error;
}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();


while($row = $result->fech_assosc()//fech_array(myqli_assosc)){

    array_push($data, $row);

    var_dump($row);

}

echo json_encore($data);





?>