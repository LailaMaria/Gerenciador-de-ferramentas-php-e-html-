<?php
$id = filter_input(INPUT_GET, "id");
$link = mysqli_connect("localhost", "root", "", "cadastroprojeto");

if ($link) {
	$query = mysqli_query ($link,"delete from cadastro where id='$id'");
	if($query){
		header("Location: index.php");
}else{
	die ("Erro: ". mysqli_error($link));
}
}else {
	die ("Erro: ". mysqli_error($link));
}



