<?php
$data= $_GET['data'];
session_start();
 $_SESSION['data'] =$data;
echo "

<head>
	<META http-equiv=Content-Type content=text/html; charset=utf-8>
	</head>
	<body>

		<div align=center>
			<h1><b>Questionário</b></h1>

			<div align=left>
				<form method=GET action=myprog4.php>
					<ol>

						<h3>4 - Qual o professor mais novo que já tivemos?</h3>
						
						<input type=radio name=professor value=Robson> Robson<br>
						<input type=radio name=professor value=Savio> Savio<br>
						<input type=radio name=professor value=Fabricio> Fabricio<br><br>


						<button href='myprog4.php' method='submit'>Próximo </button>

					</form>	


				</ol>
			</form>	
		</div>

		
	</div></body>";

?>