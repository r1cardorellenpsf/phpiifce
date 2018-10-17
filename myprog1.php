<?php
$linguagem= $_GET['linguagem'];
session_start();
 $_SESSION['linguagem'] = $linguagem ;
echo "

<head>
	<META http-equiv=Content-Type content=text/html; charset=utf-8>
	</head>
	<body>

		<div align=center>
			<h1><b>Questionário</b></h1>

			<div align=left>
				<form method=GET action=myprog2.php>
					<ol>

						<h3>2 - Qual o banco de dados usado em nossas aulas?</h3>
						<input type=radio name=banco value=MySQL> MySQL<br>
						<input type=radio name=banco value=SQL Server> SQL Server<br>
						<input type=radio name=banco value=Oracle> Oracle<br><br>

						<button href='myprog2.php' method='submit'>Próximo </button>

					</form>	


				</ol>
			</form>	
		</div>

		
	</div></body>";

?>