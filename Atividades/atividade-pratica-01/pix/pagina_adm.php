<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
	</head>
	<body>
		<a href="index.php">
			home
		</a>/
		<a href="pagina_adm.php">
			Area do administrador 
		</a>/
		<a href="add_participante.php">
			Cadastre-se
		</a>
		<h2>Faça login para adicionar um evento</h2>
		<form method="post" action="adm_controller.php">
			<input type="text" placeholder="usuario" name="usuario" />
			<br />
			<input type="password" placeholder="senha" name="senha" />
			<br />
			<button type="submit">Entrar</button><br>
			<?if ( isset($_GET['incorreto']) &&  ($_GET['incorreto']==1) ){?>
				<font color="red">Login ou senha incorrreta!</font><br>
			<?}?>
		</form>

	</body>
</html>


