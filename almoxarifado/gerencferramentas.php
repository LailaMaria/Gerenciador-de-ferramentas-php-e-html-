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
			

			

			<table border="1">
				<tr>
					<td>ID</td>
					<td>NOME</td>
					<td>MARCA</td>
					<td> &nbsp &nbsp &nbspFUNÇÕES</td>
				</tr>

				<?php
					if ($total) {
						do {
				?>

			<tr>
					<td><?php echo $linha ['id'] ?> </td>
					<td><?php echo $linha ['nome'] ?> </td>
					<td><?php echo $linha ['marca'] ?> </td>
					<td><a href="<?php echo "altferramenta.php?id=".$linha['id'] . "&nome=".$linha['nome'] . "&marca=".$linha['marca']?>">  Alterar </a> &nbsp |  &nbsp  <a href="<?php echo "excferramenta.php?id=" . $linha['id']?>"> Excluir </a></td>
				</tr>

				<?php
			} while ($linha = mysql_fetch_assoc($dados));

				mysql_free_result($dados);}

				mysql_close($mysqllink);

				?>
					
			</table>

			<p>
				<a href="index.php"> VOLTAR </a>
			</p>

		</div>

<img src="http://revistapress.com.br/wp-content/uploads/2018/04/ferramentas.png">
	</font></center></body>
</html>