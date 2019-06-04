<?php
	$conexao = mysqli_connect("localhost","root","","bdcompras");
	
	if(!$conexao){
		die("Erro de conexao: " . mysqli_error());
	} else {
		echo "Banco de dados conectado" . "<br>";
	}
	
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	
	$qtd_usuarios = "SELECT * FROM cadastrousuarios WHERE email='$email'";
	$busca = mysqli_query($conexao, $qtd_usuarios);
	$num_linhas = mysqli_num_rows($busca);
	
	if($num_linhas==0){
		$inserir = "INSERT INTO cadastrousuarios (nome, email, senha) VALUES ('$nome','$email','$senha')";
        $resultado_usuarios = mysqli_query($conexao, $inserir) or die("Erro ao cadastrar usuario.");
        session_start();
        $_SESSION['email'] = 'email';
        $_SESSION['senha'] = 'senha';
        header('Location: login.php');
	} elseif ($num_linhas>0) {
        //cadastro ja existente
        header('Location: login.php');
        echo "<label>Usuário já está cadastrado</label>";
        
    }
	
	mysqli_close($conexao);
?>