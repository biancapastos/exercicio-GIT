<?php 
		$peso = $_POST["peso"];
		$altura = $_POST["altura"];
		
		$conta1 = $altura*$altura;
		$conta2 = $peso/$conta1;
		
		$resultado = $conta2;
		
		if(isset($resultado) && $resultado != '0'){;	
			echo "<p>Seu IMC eh: $resultado</p>";
		}
		
?>


