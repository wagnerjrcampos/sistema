<?php //arquivo; conexão.php
//conexão utilizando Mysqli i = melhorado

$servidor  = "localhost";
$user	   = "root";
$senha     = "";
$bd	       = "bdexemplo";

//mysqli_connect(server,user,password,bd)

$conn = mysqli_connect("$servidor","$user","$senha","$bd");

if (!$conn){ //espera a resposta true 
	echo "conexão falhou";
}
