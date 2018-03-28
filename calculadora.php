<html>

	<body>

	<form method = "post" action = "gera_calculo_calculadora.php">
		
		<h1>Programa Calculadora : </h1>
		
		 <?php
		 
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
		
		<label>Digite o valor do número 1:</label>
		<input type = "number" name ="numero1" step = "0.1" />
		
		<br  />
		
		<select name = "operacoes">
		
			<option>+</option>
			<option>-</option>
			<option>*</option>
			<option>/</option>
			<option>%</option>
		
		</select>
		
		<br  />
		
		<label>Digite o valor do número 2:</label>
	
		<input type = "number" name = "numero2" step = "0.1" />

		<br  />
		
		<input type = "submit" name = "Calcular !" id = "Submit" />
	
		<br  />
	
	</body>
</html>