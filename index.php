<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login do Usuário</title>
	<style>
		*{
			margin:0;padding: 0;box-sizing:border-box;}
			.container{
				align-items: center;
				max-width:500px;
				height: 300px;
				background-color: #068;	
				display: flex;
				flex-wrap: wrap;
				flex-direction: column;
				text-align: center;
				justify-content: center;
				margin: 10%;
				margin-left: 30%;
				border-radius: 4px;


			}
			
			form{
				margin-right:150px ;

			}
			h2{
				margin: 5px;
				text-align: center;
			}

			.container input[type=text]{
				width: 180%;
				height: 30px;
				border-radius: 4px;
				margin: 2px;
			}
			.container input[type=password]{
				width: 180%;
				height: 30px;
				border-radius: 4px;
				margin: 2px;
			}
			.container input[type=submit]{
				width: 180%;
				height: 30px;
				border-radius: 4px;
				margin: 2px;
				background-color: #6989;
			}




</style>
	

</head>
<body>
	<div class="container">
		<form>
				<h2>
			Acesse sua Conta
		</h2>
			<input type="text" name="User" placeholder="Nome de usuário..."><br/>
			<input type="password" name="senha" placeholder="Sua senha..."><br/>
			<input type="submit" name="Entrar" value="Entrar">
	
		</form>
	</div>

</body>
</html>






