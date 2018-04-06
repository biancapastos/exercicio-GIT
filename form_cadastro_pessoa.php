<!-- Nataly -->
<!DOCTYPE html>
<?php
	session_start();
?>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Formulário de Cadastro</title>
	</head>
	<body>
	<?php
		/*include "cabecalho.inc";*/
	?>
		<form action="cadastro_pessoa.php" method="post">
			<fieldset>
				<label>Nome:</label>
				<input type="text" id="nome" name="nome"/>
				<br/>
				<label>Email:</label>
				<input type="mail" id="mail" name="mail"/>
				<label>Sexo:</label>
				<select id="sexo" name="sexo">
					<option value="masc">Masculino</option>
					<option value="fem">Feminino</option>
				</select>
				<br/>
				<label>Data de Nascimento:</label>
				<input type="date" id="data" name="data"/>
				<br/>
				<label>CPF:</label>
				<input type="number" id="cpf" name="cpf"/>
				<br/>
				<label>Cidade:</label>
				<input type="text" id="cidade" name="cidade"/>
				<br/>
				<label>Estado:</label>
				<input type="text" id="estado" name="estado"/>
				<br/>
			</fieldset>
			<input type="submit" value="Enviar"/>
			<input type="reset" value="Apagar"/>
		</form>
	</body>
</html>
