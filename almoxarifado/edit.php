<?php
$id = filter_input(INPUT_GET, "id");
$nome = filter_input(INPUT_GET, "nome");
$marca = filter_input(INPUT_GET, "marca");

$link = mysqli_connect("localhost", "root", "", "almoxarifado");

if($link) {
	$query = mysqli_query($link, "update ferramenta set nome='$nome', marca='$marca' where id='$id'; ");
	if($query) {
		header ("Location: index.php");

	}else{
		die ("Erro: ". mysqli_error($link));
	}


}else{

die ("Erro: ". mysqli_error($link));
}


?>