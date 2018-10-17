<?php
$banco= $_GET['banco'];
session_start();
$_SESSION['banco'] =$banco;
echo "

<head>
	<META http-equiv=Content-Type content=text/html; charset=utf-8>
	</head>
	<body>

		<div align=center>
			<h1><b>Questionário</b></h1>

			<div align=left>
				<form method=GET action=myprog3.php>
					<ol>

						<h3>3 - Em que dia as aulas do semestre 2015.1 tiveram início?</h3>

						<input type=radio name=data value=25/05/15> 25/05/15<br>
						<input type=radio name=data value=26/05/15> 26/05/15<br>
						<input type=radio name=data value=01/06/15> 01/06/15<br><br>

						<button href='myprog3.php' method='submit'>Próximo </button>

					</form>	


				</ol>
			</form>	
		</div>

		
	</div></body>";

?>