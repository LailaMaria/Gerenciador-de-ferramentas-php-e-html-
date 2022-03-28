<html>
	<head>
		<title> PROJETO DE ENSINO TECNOLÓGICO </title>
		<meta charset="UTF-8">
		<meta name="viewsport" content="width=device-width, initial-scale=1.0">
		<?php

		$parametro = filter_input(INPUT_GET, "parametro");
		$mysqllink = mysql_connect("localhost", "root", "");
		mysql_select_db("cadastroprojeto");
		
		
			$dados = mysql_query("select * from cadastro where id like '$parametro%' order by id");

			

		$linha = mysql_fetch_assoc($dados);
		$total = mysql_num_rows($dados);

		?>


	</head>
	<body bgcolor="#CD8162"><center><font face="Arial">
		<div id="conteudo"> </br>

			<h1> PROJETO DE ENSINO TECNOLÓGICO  </h1>
			<h3> Seja bem-vindo! </h3>
			<h4> Confira a lista de pessoas cadastradas </h4>

			<p>
				<a href="cadastro.php"> Clique aqui para realizar um novo cadastro! </a>
			</p>

			<table border="1">
				<tr>
					<td>ID</td>
					<td>NOME</td>
					<td>E-MAIL</td>
					<td>TELEFONE</td>
					<td>ENDEREÇO</td>
					<td>CIDADE</td>
					<td>CARGO</td>
					<td>DESCRIÇÃO</td>
					<td> &nbsp &nbsp &nbsp FUNÇÕES </td>
				</tr>

				<?php
					if ($total) {
						do {
				?>

			<tr>
					<td><?php echo $linha ['id'] ?> </td>
					<td><?php echo $linha ['nome'] ?> </td>
					<td><?php echo $linha ['email'] ?> </td>
					<td><?php echo $linha ['telefone'] ?> </td>
					<td><?php echo $linha ['end'] ?> </td>
					<td><?php echo $linha ['cidade'] ?> </td>
					<td><?php echo $linha ['funcao'] ?> </td>
					<td><?php echo $linha ['descricao'] ?> </td>

					<td><a href="<?php echo "alterar.php?id=".$linha['id'] . "&nome=".$linha['nome'] . "&email=".$linha['email'] . "&telefone=".$linha['telefone'] . "&end=".$linha['end'] . "&cidade=".$linha['cidade'] . "&funcao=".$linha['funcao'] . "&descricao=".$linha['descricao'] . "&telefone=".$linha['telefone'] ?>"> Alterar </a>  &nbsp   |  &nbsp
						<a href="<?php echo "excluir.php?id=" . $linha['id']?>"> Excluir </a></td>
				</tr>

				<?php
			} while ($linha = mysql_fetch_assoc($dados));

				mysql_free_result($dados);}

				mysql_close($mysqllink);

				?>
					
			</table>
		</div>

	<img src="http://i67.tinypic.com/6htk5s.png">

	</font></center></body>
</html>