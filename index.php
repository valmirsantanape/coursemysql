<?php
include "connect.php";
echo"<h1>Dados dos Alunos</h1>";

//Exibir dados do banco de dados

$sql = mysqli_query($link, "SELECT * FROM tb_alunos");
?>