<?php
$id = filter_input(INPUT_GET, "id");
$nome = filter_input(INPUT_GET, "nome");
$email = filter_input(INPUT_GET, "email");
$telefone = filter_input(INPUT_GET, "telefone");
$cidade = filter_input(INPUT_GET, "cidade");
$funcao = filter_input(INPUT_GET, "funcao");
$descricao = filter_input(INPUT_GET, "descricao");
$end = filter_input(INPUT_GET, "end");

$link = mysqli_connect("localhost", "root", "", "cadastroprojeto");

if($link) {
	$query = mysqli_query($link, "update cadastro set nome='$nome', email='$email',telefone='$telefone',cidade='$cidade',funcao='$funcao',descricao='$descricao',end='$end'  where id='$id'; ");
	if($query) {
		header ("Location: index.php");

	}else{
		die ("Erro: ". mysqli_error($link));
	}


}else{

die ("Erro: ". mysqli_error($link));
}


?>

