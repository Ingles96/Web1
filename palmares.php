<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="plantillaypalmares.css">
    <meta charset="utf-8">
    <title>Palmares Valencia C.F.</title>
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


<h1>Palmarés</h1>
<table border=1>

<?php

$resultado2 = $conexion->query("SELECT * FROM palmares");


echo "<tr>";
echo "<td>";
echo "<strong>Competicion</strong>";
echo "<td><strong>Titulos</strong></td>";
echo "<td><strong>Años</strong></td>";
echo "</tr>";


while ($fila=$resultado2->fetch_assoc()) {
  echo "<tr>";
  echo "<td>";
  echo " ".$fila["Competicion"].  "<br>";
  echo "</td>";
  echo "<td>";
  echo " ".$fila["Titulos"].  "<br>";
  echo "</td>";
  echo "<td>";
  echo " ".$fila["Anos"].  "<br>";
  echo "</td>";
  echo "</tr>";


}
 ?>

</table>
  </body>
</html>
