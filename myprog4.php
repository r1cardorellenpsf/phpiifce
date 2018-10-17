<?php
$professor= $_GET['professor'];
session_start();
$_SESSION['professor'] =$professor;
echo "

<head>
	<META http-equiv=Content-Type content=text/html; charset=utf-8>
	</head>
	<body>

		<div align=center>
			<h1><b>Questionário</b></h1>

			<div align=left>
				<form method=GET action=myprog5.php>
					<ol>

						<h3>5 - Em que posição ficamos na JAC?</h3>
						
						<input type=radio name=posicao value=12> 12<br>
						<input type=radio name=posicao value=13> 13<br>
						<input type=radio name=posicao value=14> 14<br><br>

						<button href='myprog5.php' method='submit'>Próximo </button>

					</form>	


				</ol>
			</form>	
		</div>

		
	</div></body>";

?>