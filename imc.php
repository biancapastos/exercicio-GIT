<!DOCTYPE>
<html lang = "pt-br">
	<head>
		<meta charset = "UTF-8" />
		<title> IMC </title>
		<link rel = "stylesheet" href = "estilos.css" />
	</head>
	
	<body>
		<form action = "gera_calculo_imc.php" method = "post">
			<fieldset>
				<p>
					<label> Digite seu Nome: </label> 
					<input type = "text" name = "nome" />
				</p>
				<p>
					<label> Digite seu peso: </label> 
					<input type = "number" name = "peso" step= "0.01" min = "1" />
				</p>
				
				<p>
					<label> Digite sua altura: </label> 
					<input type = "number" name = "altura" step= "0.01" min = "1" />
				</p>
				
				<p>
					<input type = "submit" value = "Submeter"/>
					<input type = "reset" value = "Apagar"/>
				</p>
			</fieldset>
		</form>
	</body>
</html>