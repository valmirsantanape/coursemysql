<?php
include "connect.php";
echo"<h1>Dados dos Alunos</h1>";

//Exibir dados do banco de dados

$sql = mysqli_query($link, "select * from tb_aluno");
while($dados = mysqli_fetch_array($sql)){
	echo "$dados[id_aluno]<br>";
	echo "$dados[nome]<br>";
	echo "$dados[email]<br>";
	echo "$dados[senha]<hr>";
}
// a função mysqli_fetch_array faz uma varredura da vareavel usada como paramentro
//$dados vai receber o conteudo armazenado no banco de dados
?>