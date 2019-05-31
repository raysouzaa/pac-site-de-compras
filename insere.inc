<?php

include 'conecta_mysql.inc';

$nome 			 = $_POST['nome'];
$email 			 = $_POST['email'];
$senha           = $_POST['senha'];

$sql = "INSERT INTO cadastro VALUES";
$sql .= "('$nome','$email', '$senha')";

if ($conexao->query($sql) === TRUE) {
	echo  "Usuário incluído com sucesso!";
} else {
	echo "Erro: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();