<!-- Bianca -->
<?php

	function calculo_imc($altura, $peso){
		
		$altura_final = pow($altura,2);
		
		$imc = $peso / $altura_final;
		
		echo "Seu imc eh: $imc";
		
	}
	
	function calculadora($n1, $n2, $oper){
		
		switch ($oper){
			
			case '+':
				$soma = $n1 + $n2;
				echo "O resultado da soma eh: $soma";
				break;
				
			case '-':
				$sub = $n1 - $n2;
				echo "O resultado da subtracao eh: $sub";
				break;
				
			case '*':
				$mult = $n1 * $n2;
				echo "O resultado da multiplicacao eh: $mult";
				break;
				
			case '/':
				if($n2 == 0){
					echo "Nao existe divisao por 0";
				}else{
					$div = $n1 / $n2;
					echo "O resultado da divisao eh: $div";
				}
				break;
				
			case '%':
				$parte1 = $n1 * $n2;
				$conta = $parte1 / 100;
				echo "O resultado da porcentagem eh: $conta";
				break;
				
			default:
				echo "Acao invalida";
			
		}
		
	}

?>