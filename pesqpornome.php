<?php //pesqpornome.php

include('conexao.php');
//select = comando de busca de dados nas tabelas
//select * from tbl - *=todo
//select login,senha form tbl;


$sql = "select * from tblprod1 where produto='banana'";

$qry = mysqli_query($conn,$sql);

while ($linha = mysqli_fetch_array($qry)){
	echo $linha['produto']."<br>";
	echo $linha	['preco']."<br>";
		echo "<hr>";
}