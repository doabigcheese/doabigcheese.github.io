<?php
$data = $_GET["poi"];
$file = fopen("pois.txt","a");
fwrite($file, $data);	
fclose($file);

?>