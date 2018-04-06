<!-- Nataly, Bianca me ajudou -->
<?php
	$nome = $_POST["nome"];
	$email = $_POST["mail"];
	$sexo = $_POST["sexo"];
	$dataN = $_POST["data"];
	$cpf = $_POST["cpf"];
	$cidade = $_POST["cidade"];
	$estado = $_POST["estado"];
	
	if(isset($_POST["nome"])){
		if(!isset($_SESSION["contador"])){
			$_SESSION["contador"] = 0;
		}
		$_SESSION["nome"][$_SESSION["contador"]]= $_POST["nome"];
		$_SESSION["mail"][$_SESSION["contador"]]= $_POST["mail"];
		$_SESSION["sexo"][$_SESSION["contador"]]= $_POST["sexo"];
		$_SESSION["data"][$_SESSION["contador"]]= $_POST["data"];
		$_SESSION["cpf"][$_SESSION["contador"]]= $_POST["cpf"];
		$_SESSION["cidade"][$_SESSION["contador"]]= $_POST["cidade"];
		$_SESSION["estado"][$_SESSION["contador"]]= $_POST["estado"];
		
		$_SESSION["contador"]++;
		
		echo "Você foi cadastrado(a)!";
	}
?>