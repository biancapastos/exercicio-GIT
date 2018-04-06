<?php
	include("cabecalho.php");
	
//Denise Soares
?>
<html>
	<head>
		<meta charset="UTF-8" />
		<link rel = "stylesheet" type = "text/css" href = "estilo.css" />
	</head>
	<body>	
		<fieldset>	
			<table>
				<tr><th>Usuarios</th></tr>
				<tr>
					<td>
						<?php
						session_start();
						if(isset($_SESSION["nome"][0])){
							foreach($_SESSION["nome"] as $i => $v){
								echo"<tr>
										<td>".$v."</td>
										<td>".$_SESSION['mail'][$i]."</td>
										<td>".$_SESSION['sexo'][$i]."</td>
										<td>".$_SESSION['data'][$i]."</td>
										<td>".$_SESSION['cpf'][$i]."</td>
										<td>".$_SESSION['cidade'][$i]."</td>
										<td>".$_SESSION['estado'][$i]."</td>
									</tr>";
							}
						}else {
							echo "<p>Não Contêm Dados</p>";
						}
						?>
					</td>
				</tr>
			</table>
			<table>
			<tr><th>Cálculos da Calculadora</th	></tr>
				<tr>
					<td>
						<?php
						if(isset($_SESSION["nome"][0])){
							foreach($_SESSION["nome"] as $i => $v){
								echo"<tr>
										<td>".$v."</td>
										<td>".$_SESSION[''][$i]."</td>
										<td>".$_SESSION[''][$i]."</td>
										<td>".$_SESSION[''][$i]."</td>
										<td>".$_SESSION[''][$i]."</td>
										<td>".$_SESSION[''][$i]."</td>
										<td>".$_SESSION[''][$i]."</td>
									</tr>";
							}
						}else {
							echo "<p>Não Contêm Dados</p>";
						}
						?>
					</td>	
				<tr>
			</table>		
			<table>
				<tr><th>Calculos do IMC</th></tr>
				<tr>
					<td>
						<?php
						if(isset($_SESSION["nome"][0])){
							foreach($_SESSION["nome"] as $i => $v){
								echo"<tr>
										<td>".$v."</td>
										<td>".$_SESSION[''][$i]."</td>
										<td>".$_SESSION[''][$i]."</td>
										<td>".$_SESSION[''][$i]."</td>
										<td>".$_SESSION[''][$i]."</td>
										<td>".$_SESSION[''][$i]."</td>
										<td>".$_SESSION[''][$i]."</td>
									</tr>";
							}
						}else {
							echo "<p>Não Contêm Dados</p>";
						}
						?>
					</td>
				</tr>
			</table>
		<fieldset>		
	</body>	
</html>