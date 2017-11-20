<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="plantillaypalmares.css">
    <meta charset="utf-8">
    <title>Plantilla Valencia C.F.</title>
  </head>
  <body>

<?php

//Me conecto a la base de datos
$conexion = new mysqli("localhost", "root", "", "futbol");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
  }else {
}
?>


<h1>Plantilla 2016/2017</h1>
<table border=1>

<?php

$resultado = $conexion->query("SELECT * FROM plantilla");


echo "<tr>";
echo "<td>";
echo "<strong>Numero</strong>";
echo "<td><strong>Nacionalidad</strong></td>";
echo "<td><strong>Posicion</strong></td>";
echo "<td><strong>Nombre</strong></td>";
echo "<td><strong>Edad</strong></td>";
echo "</tr>";


while ($fila=$resultado->fetch_assoc()) {
  echo "<tr>";
  echo "<td>";
  echo " ".$fila["Numero"].  "<br>";
  echo "</td>";
  echo "<td>";
  echo " ".$fila["Nacionalidad"].  "<br>";
  echo "</td>";
  echo "<td>";
  echo " ".$fila["Posicion"].  "<br>";
  echo "</td>";
  echo "<td>";
  echo " ".$fila["Nombre"].  "<br>";
  echo "</td>";
  echo "<td>";
  echo " ".$fila["Edad"].  "<br>";
  echo "</td>";
  echo "</tr>";


}
 ?>

</table>
  </body>
</html>
