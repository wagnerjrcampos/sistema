<?php 
include("conexao.php");
echo "arquivo que recebe dados <br>";
// DEVEMOS PEGAR OS DADOS DA URL ATRAVES DA VARIAVEL
//GLOBAL $_POST ["NOMEDOCAMPODOFORMULAIRO"]
$login 	=	$_POST['login'];
$senha 	=	$_POST['senha'];
$dtcad 	=	$_POST['dtcad'];
$ativo	=	$_POST['ativo'];

//echo "{$login} - {$dtcad}";
// insert into nometbl (campos) values (valores)
$sql = "insert into tblogin (login,senha,dtcad,ativo) values ('$login','$senha','$dtcad','$ativo')";

		//comando de execução da (query,qry)
		$qry = mysqli_query($conn,$sql);