<!-- Nataly -->
<?php
	include("cabecalho.php");
?>

<!DOCTYPE html>
<?php
	session_start();
?>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Formulário de Cadastro</title>
		<link rel = "stylesheet" href = "estilo.css" />
	</head>
	<body>
	<?php
		/*include "cabecalho.inc";*/
	?>
		<form action="cadastro_pessoa.php" method="post">
		
			<fieldset class = "form">
				<legend>Cadastro de Usuario : </legend>
				<label>Nome:</label>
				<input type="text" id="nome" name="nome"/>
				<br  />
				<br  />
				<label>Email:</label>
				<input type="mail" id="mail" name="mail"/>
				<br  />
				<br  />
				<label>Sexo:</label>
				<select id="sexo" name="sexo">
					<option value="masc">Masculino</option>
					<option value="fem">Feminino</option>
				</select>
				<br  />
				<br  />
				<label>Data de Nascimento:</label>
				<input type="date" id="data" name="data"/>
				<br  />
				<br  />
				<label>CPF:</label>
				<input type="number" id="cpf" name="cpf"/>
				<br  />
				<br  />
				<label>Cidade:</label>
				<input type="text" id="cidade" name="cidade"/>
				<br  />
				<br  />
				<label>Estado:</label>
				<input type="text" id="estado" name="estado"/>
				<br  />
				<br  />
				<input type="submit" value="Enviar"/>	
			</fieldset>
			
		</form>
	</body>
</html>
