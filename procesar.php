<!DOCTYPE html>
<html>
<head>
	<title>Resultados del Validador de Palíndromos</title>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8"/>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<h1>Tabla de resultados palíndromos</h1>
	<table>
		<tr>
            <th>#</th>
			<th>Frases Ingresadas</th>
			<th>Palíndromo</th>
		</tr>
        <?php
            include_once 'php/validar.php';
        ?>
	</table>
</body>
</html>
