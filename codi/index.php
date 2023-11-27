<!DOCTYPE html>
<html lang="ca">
	<head>
		<meta charset="utf-8">
		<title>Cost de fabricació de llaunes de begudes</title>
	</head>
	<body>
		<h3><b>Cost de fabricació de llaunes de begudes</b></h3>
	        <form action="CostFabLlauBeg.php" method="GET">
			<p>Radi en cm de la llauna de beguda: <input type="text" name="r"></p>			
			<p>Longitud en cm de la llauna de beguda: <input type="text" name="l"></p>
			<p>Gruix en cm del material de la llauna de beguda: <input type="text" name="g"></p>
			<p>Densitat del material en gram per cm3 de la llauna de beguda: <input type="text" name="d"></p></p> <!-- densitat alumini -> 2,7 gr per cm3 -->
			<p>Cost del material en $ per gram de la llauna de beguda: <input type="text" name="cpg"></p> <!-- preu a 27-10-23 -> 0,00217$ per gram -->
			<input type="submit"/>
		</form>
		<?php
			echo '<p><font size="1">Servidor: '.getenv('HOST_NAME').'</font></p>';
		?>
	</body>
</html>

	
