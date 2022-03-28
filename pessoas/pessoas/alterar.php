<html>
	<head>
		<title> PROJETO DE ENSINO TECNOLÓGICO </title>
		<meta charset="UTF-8">
	
		<?php

		$id = filter_input (INPUT_GET, "id");
		$nome = filter_input (INPUT_GET, "nome");
		$end = filter_input (INPUT_GET, "end");
		$email = filter_input (INPUT_GET, "email");
		$telefone = filter_input (INPUT_GET, "telefone");
		$cidade = filter_input (INPUT_GET, "cidade");
		$funcao = filter_input (INPUT_GET, "funcao");
		$descricao = filter_input (INPUT_GET, "descricao");


		?>


	</head>

	<body bgcolor="#CD8162"><center><font face="Arial"> 

		<div id="conteudo"><br/>
			<h1> PROJETO DE ENSINO TECNOLÓGICO  </h1>
			<h3> ALTERAÇÃO DE DADOS </h3>

			<form action="edit.php">
				<input type="hidden" name="id" value="<?php echo $id ?>" />

				Nome: <input type="text" name="nome" value="<?php echo $nome ?>" />
				<br/><br/>

				E-mail: <input type="text" name="email" value="<?php echo $email ?>"/>
				<br/><br/>

				Telefone: <input type="text" name="telefone" value="<?php echo $telefone ?>" />

				<br/><br/>

				Endereço: <input type="text" name="end" value="<?php echo $end ?>" />
				<br/><br/>

				Cidade: <input type="text" name="cidade" value="<?php echo $cidade ?>"/>
				<br/><br/>

				Cargo: <input type="text" name="funcao" value="<?php echo $funcao ?>" />
				<br/><br/>

				Descrição: <input type="text" name="descricao" value="<?php echo $descricao ?>"/>
				<br/><br/>

				
				
				<br/><br/>

				<input type="submit" value="ALTERAR"/>

			</form>

		</div>

		<img src="https://cdn.psychologytoday.com/sites/default/files/field_blog_entry_images/team-1697987_960_720.png">

	</font></center></body>


</html>