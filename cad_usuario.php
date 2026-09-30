<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title> Larissawn - Cadastrar </title>		
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="cadastro.css">
	</head>
	<body>
		<div class="links">
		<a href="cad_usuario.php" class="cadastro"> Cadastrar </a><br>
		<a href="index.php" class="listar"> Listar </a><br>
		</div>
		<h1> Cadastrar Usuário </h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="proc_cad_usuario.php">
			<label> Nome: </label>
			<input type="text" name="nome" placeholder="Digite o nome completo"><br><br>
			
			<label> E-mail: </label>
			<input type="email" name="email" placeholder="Digite o seu e-mail principal"><br><br>
			
			<input type="submit" value="Cadastrar" class="cadastro">
		</form>
	</body>
</html>