<?php

$file = fopen("text.txt", "w+");

fclose($file);

unlink($file);

echo "arquivos removidos com sucesso";


?>