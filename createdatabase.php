<?php
	$conexao = mysqli_connect("localhost", "root", "");
	
	if(!$conexao){
		die("Erro de conexao ".mysqli_connect_error());
	} else {
		echo "BD conectado" . "<br>";
	}
	
	$bd = mysqli_select_db($conexao,"bdcompras");
	
	if(empty($bd)){
		
		echo "Banco de dados não encontrado" . "<br>";
		
		$bd = "CREATE DATABASE bdcompras DEFAULT CHARSET=utf8";
		
		$CriaBD = mysqli_query($conexao, $bd);
		
		if(!$CriaBD){
			echo "Erro ao criar o banco de dados" . "<br>";
		} else {
			echo "Banco de dados criado com sucesso" . "<br>";
		}
		
	} else {
		
		echo "Banco de dados encontrado" . "<br>";
		
		$tabela = "SELECT * FROM cadastrousuarios";
		$BuscaTabela = mysqli_query($conexao, $tabela);
		
		if(!$BuscaTabela){
			echo "Tabela não encontrada" . "<br>";
			
			$MinhaTabela = "CREATE TABLE CadastroUsuarios(
			id int(100) NOT NULL AUTO_INCREMENT,
			nome varchar(40) NOT NULL,
			email varchar(60) NOT NULL,
			senha varchar(20) NOT NULL,
			PRIMARY KEY(id)
			)DEFAULT CHARSET=utf8";
			
			$CriaTabela = mysqli_query($conexao, $MinhaTabela);
			
			if(!$CriaTabela){
				echo "Erro durante a criação da tabela" . "<br>";
			} else {
				echo "Tabela criada com sucesso" . "<br>";
			}	
		}
	}
	
	mysqli_close($conexao);
	
?>
