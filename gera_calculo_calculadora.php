<?php
 
  include ("funcoes.php");
    session_start();
		
		calculadora($_POST["numero1"], $_POST["numero2"], $_POST["operacoes"]);
	?>		
	