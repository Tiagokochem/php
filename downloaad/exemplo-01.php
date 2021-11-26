<?php

$link = "https://logosmarcas.net/wp-content/uploads/2020/09/Google-Logo.png";

$content = file_get_contents($link);

//var_dump($content);

$parce = parse_url($link);

$basename = basename($parce["path"]);


$file = fopen($basename, "w+");

fwrite($file, $content);


fclose($file);

?>

<img src="<?=$basename?>"