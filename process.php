<?php

$mensagem = $_POST['mensagem'];
$files = scandir("./mensagens");
$num_files = count($files) - 2;

$filename = 'mensagens' . $num_files . '.txt';
$file = fopen("./mensagens/{$filename}", "x");

fwrite($file, $mensagem);
fclose($file);

header('Location: index.php');
?>