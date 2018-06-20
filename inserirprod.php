<?php 
include("conexao.php");
echo "arquivo que recebe dados <br>";
// DEVEMOS PEGAR OS DADOS DA URL ATRAVES DA VARIAVEL
//GLOBAL $_POST ["NOMEDOCAMPODOFORMULAIRO"]
$produto 	=	$_POST['produto'];
$preco 	=	$_POST['preco'];

//echo "{$login} - {$dtcad}";
// insert into nometbl (campos) values (valores)
$sql = "insert into tblprod1 (produto,preco) values ('$produto','$preco')";

		//comando de execução da (query,qry)
		$qry = mysqli_query($conn,$sql);
		
		header ('Location:cadprod.php');