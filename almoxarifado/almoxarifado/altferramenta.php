<html>
	<head>
		<title> GERENCIAMENTO DE FERRAMENTAS </title>
		<meta charset="UTF-8">
	
		<?php

		$id = filter_input (INPUT_GET, "id");
		$nome = filter_input (INPUT_GET, "nome");
		$marca = filter_input (INPUT_GET, "marca");


		?>


	</head>

	<body bgcolor="#CD6839"><center><font face="Arial"> 

		<div id="conteudo"><br/>
			<h1> GERENCIAMENTO DE FERRAMENTAS </h1>
			<h3> ALTERAÇÃO DE FERRAMENTAS </h3>

			<form action="edit.php">
				<input type="hidden" name="id" value="<?php echo $id ?>" />

				Nome: <input type="text" name="nome" value="<?php echo $nome ?>" />
				<br/><br/>
				Marca: <input type="text" name="marca" value="<?php echo $marca ?>"/>
				<br/><br/>

				<input type="submit" value="ALTERAR"/>

			</form>

		</div>

		<img src="http://revistapress.com.br/wp-content/uploads/2018/04/ferramentas.png">

	</font></center></body>


</html>