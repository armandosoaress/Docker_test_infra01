<?php

  $message = $_POST["mensagem"];

  $files = scandir("./messages");
  $num_files = count($files) - 2; // . e ..

  $fileName = "msg-{$num_files}.txt";

  $file = fopen("./messages/{$fileName}", "x");

  fwrite($file, $message);

  fclose($file);

  header("Location: index.php");