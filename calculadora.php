<?php
	include("cabecalho.php");
	
?>

<html>

	<body>

	<form method = "post" action = "gera_calculo_calculadora.php">
	<link rel = "stylesheet" href = "estilo.css" />
		
		
		
		 <?php
		 session_start();
		 if (isset($_POST["nome_aluno"])){
                if (!isset($_SESSION["cont"])) {
					
                    $_SESSION["cont"] = 0;
					
                }
					
				$_SESSION["numero1"][$_SESSION["cont"]] = $_POST["numero1"];
                $_SESSION["numero2"][$_SESSION["cont"]] = $_POST["numero2"];
                $_SESSION["cont"] ++;		
		?>

		<br  />
		
		<select>
		
			<option><?= $_SESSION[""][$i];?></option>
		
		</select>
		<?php
		 }
		?>
	<fieldset class = "form">	
		<legend>Programa Calculadora : </legend>
		<br  />
	
		<label>Digite o valor do numero 1: </label>
		<input type = "number" name ="numero1" step = "0.1" />
		<br  />
		<br  />
		
		<label>Escolha a operacao: </label>
		<select name = "operacoes">
		
			<option>+</option>
			<option>-</option>
			<option>*</option>
			<option>/</option>
			<option>%</option>
		
		</select>
		
		<br  />
		<br  />
		
		<label>Digite o valor do numero 2: </label>
	
		<input type = "number" name = "numero2" step = "0.1" />

		<br  />
		<br  />
		<input type = "submit" name = "Calcular !" id = "Submit" />
	
		<br  />
	</fieldset>	
	</form>
	</body>
</html>