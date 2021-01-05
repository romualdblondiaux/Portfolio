<?php
header('Access-Control-Allow-Origin: *'); 

$file = $_GET['json'].'.json'; 
// mettre le contenu du fichier dans une variable
$data = file_get_contents($file); 
echo $data;

?>