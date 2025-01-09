<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Cadastro</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}
		body{
			background-color: white;
			margin-bottom: 50px;
		}
		.form{
			display: flex;
			flex-direction: column;
			align-items: center;
			background: #211b15;
			width: 70%;
			height: 70%;
			margin: 100px auto;
			padding: 20px 15px;
			border: solid 3px #1e90ff;
			border-radius: 90px;
			text-align: center;
		}
		.form-1{
			
			width: 80%;
			display: flex;
			flex-direction: column;
			align-items: center;
		}
		h1{
			text-align: center;
			font-family: arial;
			padding: 5px;
			margin-bottom: 5px;
			color: white;
		}
		.barra{
			height: 15px;
			width: 190px;
	        background:transparent;
	        display: block;
			padding: 5px 7px;
			border-color: #1e90ff;
			border-radius: 15px;
			transition: 0.25s;
			outline: none;
			text-align: center;
			margin-bottom: 5px;
			color: white;
		}
		.barra:focus{
			width: 280px;
			border-color: #2ecc71;
		}
		.btn{
			border: solid #1e90ff;
			border-radius: 30px;
			height: 40px;
			width: 90px;
			outline: none;
			cursor: pointer;
			transition: 1s;
			background-color: transparent;
			color: white;
			border-style: groove;
		}
		.btn:hover{
			background-color: #1e90ff;
			transition: 1s;
			border-color: #1e90ff;
		}
		.button{
			border: solid #1e90ff;
			border-radius: 30px;
			height: 40px;
			width: 90px;
			outline: none;
			cursor: pointer;
			transition: 1s;
			background-color: transparent;
			color: white;
			border-style: groove;
		}
		.button:hover{
			background-color: #1e90ff;
			transition: 1s;
			border-color: #1e90ff;
		}
		.box-buttons{
			display:flex;
			gap: 15px;
		}
	</style>
</head>
<body>
	<div class="form">
        <h1><strong>Cadastro</strong></h1><br/>

		<div class="form-1">
			<form class="form-1" action="cadastro.php" method="POST">
				<input class="barra" type="text" name="nome1" placeholder="Digite o 1º nome">
				<input class="barra" type="text" name="nome2" placeholder="Digite o 2º nome">
				<input class="barra" type="text" name="nome3" placeholder="Digite o 3º nome"> 
				<input class="barra" type="text" name="nome4" placeholder="Digite o 4º nome">
				<input class="barra" type="text" name="nome5" placeholder="Digite o 5º nome">
				<input class="barra" type="text" name="nome6" placeholder="Digite o 6º nome">
				<input class="barra" type="text" name="nome7" placeholder="Digite o 7º nome">
				<input class="barra" type="text" name="nome8" placeholder="Digite o 8º nome">
				<input class="barra" type="text" name="nome9" placeholder="Digite o 9º nome">
				<input class="barra" type="text" name="nome10" placeholder="Digite o 10º nome"><br><br>
				<div class="box-buttons">
					<input class="btn" type="submit" value="Enviar">
					<button class="button">Pesquisar</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>
