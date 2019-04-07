<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Autocompletado con jQuery</title>
		<link rel="stylesheet" type="text/css" href="css/jquery.ui.css"/>
		<link rel="stylesheet" type="text/css" href="css/default.css"/>
	</head>
	<body>
		<div class="page">
			<div class="content">
				<h1>Autocompletar</h1>
				<hr />
				<p class="description">Este es un ejemplo práctico de las funciones de autocompletar de jQuery UI.</p>
				<table>
					<thead>
						<th>País</th>
						<th>Código ISO</th>
					</thead>
					<tr>
						<td><input id="pais" type="text" size="40" /></td>
						<td><label id="codigo_iso"></label></td>
					</tr>
				</table>
			</div>
		</div>
		<script type="text/javascript" src="js/jquery.1.7.1.js"></script>
		<script type="text/javascript" src="js/jquery.ui.1.8.16.js"></script>
		<script type="text/javascript" src="js/busqueda.js"></script>
	</body>
</html>