<html>
	<head>
		<title> GERENCIAMENTO DE FERRAMENTAS </title>
		<meta charset="UTF-8">
		<meta name="viewsport" content="width=device-width, initial-scale=1.0">
		<?php

		$parametro = filter_input(INPUT_GET, "parametro");
		$mysqllink = mysql_connect("localhost", "root", "");
		mysql_select_db("almoxarifado");
		
		
			$dados = mysql_query("select * from ferramenta where id like '$parametro%' order by id");

			

		$linha = mysql_fetch_assoc($dados);
		$total = mysql_num_rows($dados);

		?>


	</head>
	<body bgcolor="#E9967A"><center><font face="Arial">
		<div id="conteudo"> </br>

			<h1> GERENCIAMENTO DE FERRAMENTAS </h1>
			<h3> Seja bem-vindo! </h3>
			

			<p>
				<a href="cadferramenta.php"> Clique aqui para cadastrar nova ferramenta! </a>
			</p>

			<p>
				<a href="gerencferramentas.php"> Clique aqui para listar ferramentas! </a>
			</p>

			
		</div>

	<img src="http://revistapress.com.br/wp-content/uploads/2018/04/ferramentas.png">
	</font></center></body>
</html>