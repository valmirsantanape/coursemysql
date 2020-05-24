<?php
//Arquivo de conexao com o banco de dados
$host = "localhost";
$user = "root";
$pass = "";
$database = "bd_curso";



$link = mysqli_connect($host,$user,$pass,$database);
if($link==true)
	echo"Ok";
else
	echo"Falha na conecção";
?>