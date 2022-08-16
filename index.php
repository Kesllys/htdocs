<html>

<head>
	<link href="estilo.css" rel="stylesheet">
	<h1>Cidades do Brasil</h1>
</head>
<body>
<div>
	<table border = 2>
			
	<colgroup>
		<col class="vermelho">
		<col class="azul">
	</colgroup>

	<tr>
		<th>Cidade</th>
		<th>Estado</th>
	</tr>

	<?php include("conn.php");

	$sql_tipo = " SELECT C.NOME AS CIDADE,
						E.NOME AS ESTADO
					FROM CIDADE C, ESTADO E
				WHERE C.CODIGO_ESTADO = E.CODIGO_ESTADO";

	$resulta = $conn->query($sql_tipo);

	if ($resulta->num_rows > 0) {
		while ( $row = $resulta->fetch_assoc() ) {
			echo '<tr>';
			echo '<td>'. $row['CIDADE'] .'</td>';
			echo '<td>'. $row['ESTADO'] .'</td>';
			echo '</tr>';
		}
	}
	?>
	</table>
</div>
</body>

</html>