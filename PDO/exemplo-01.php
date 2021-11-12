<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root, "");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fechAll(PDO:FECH_ASSOC);

foreach ($results as $row){
    foreach ($row as $key =>values){
           echo "<strong>". $key.":</strong>" . $value . "<br/>";
    }
    echo "======================================<br/>";
}

var_dump($results);





?>