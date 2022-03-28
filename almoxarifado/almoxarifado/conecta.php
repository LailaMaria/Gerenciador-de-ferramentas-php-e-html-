<?php

$nome = filter_input(INPUT_GET, "nome");
$marca = filter_input(INPUT_GET, "marca");

$link = mysqli_connect("localhost", "root", "", "almoxarifado");

if ($link){
$query = mysqli_query($link, "insert into ferramenta values ('', '$nome', '$marca');");

if ($query) {
	header("Location: index.php");


}else {
	die ("Erro: ". mysqli_error($link));
}

} else {
	die ("Erro: ". mysqli_error($link));
}


?>