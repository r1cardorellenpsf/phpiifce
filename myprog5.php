<?php
$posicao= $_GET['posicao'];
session_start();
$_SESSION['posicao'] =$posicao;
echo "

<head>
	<META http-equiv=Content-Type content=text/html; charset=utf-8>
	</head>
	<body>

		<div align=center>
			<h1><b>Questionário</b></h1>

			<div align=left>
				<form method=GET action=myprog7.php>
					<ol>

						<h3>6 - Em que ano Informática ganhou a SEC?</h3>
						
						<input type=radio name=anosec value=2013> 2013<br>
						<input type=radio name=anosec value=2014> 2014<br>
						<input type=radio name=anosec value=2015> 2015<br><br>

						<button href='myprog7.php' method='submit'>Próximo </button>

					</form>	


				</ol>
			</form>	
		</div>

		
	</div></body>";

?>