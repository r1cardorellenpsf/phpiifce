<?php

$x = 0;

$anosec= $_GET['anosec'];
session_start();
$_SESSION['anosec'] =$anosec;

$Linguagem = $_SESSION['linguagem'];
$Banco = $_SESSION['banco'];
$Data = $_SESSION['data'];
$Professor = $_SESSION['professor'];
$Posicao = $_SESSION['posicao'];
$Anosec = $_SESSION['anosec'];


echo "<b>Respostas dadas<br></b>";
echo "Linguagem: $Linguagem<br>";
echo "Banco: $Banco<br>";
echo "Data: $Data<br>";
echo "Professor: $Professor<br>";
echo "Posicao: $Posicao<br>";
echo "Ano SEC: $Anosec<br><br>";

echo "<b>Respostas corretas</b><br>";
echo "Linguagem: Java<br>";

if ($Linguagem == 'Java')
	$x == $x++;
echo "Banco: MySQL<br>";
if ($Banco == 'MySQL')
	$x == $x++;
echo "Data: 25/05/15<br>";
if ($Data == '25/05/15')
	$x == $x++;
echo "Professor: Robson<br>";
if ($Professor == 'Robson')
	$x == $x++;
echo "Posicao: 13<br>";
if ($Posicao == '13')
	$x == $x++;
echo "Ano SEC: 2013<br><br>";
if ($Anosec == '2013')
	$x == $x++;

echo "<b>Pontuação:</b> $x/6";


?>