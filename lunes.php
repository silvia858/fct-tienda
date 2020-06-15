<?php
session_start();
echo "hola usuario: ".$_SESSION["usuario"]."";
?>
<HTML>
<HEAD>
<TITLE></TITLE>
<meta charset="utf-8">	
</HEAD>
<BODY>
<br>
<br>

<?php

$conexion=mysqli_connect("localhost","root","","tienda");

$miselect ="select * from menu where dia_menu='lunes'";


echo $miselect;

$cursor=mysqli_query($conexion, $miselect);

echo "<table border=2 bgcolor=pink >";
echo "<tr><th>nombre del plato</th><th>dia</th><th>precio</th></tr>";

while( $datos=mysqli_fetch_row($cursor)){
	echo "<tr>";
	echo "<td>".$datos[1]."</td><td>".$datos[2]."</td><td>".
		$datos[3]."</td>";

	echo "</tr>";
}
echo "</table>";



mysqli_close($conexion);




?>
</BODY></HTML>