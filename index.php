<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="index.css">
    <meta charset="utf-8">
    <title>FUTBOL</title>
  </head>
  <body>

    <ul>
  <li><a href="index.php">HOME</a></li>
  <li><a href="palmares.php">PALMARÉS</a></li>
  <li><a href="plantilla.php">PLANTILLA 2016/2017</a></li>
</ul>

<h1> VALENCIA C.F. </h1>
    <?php

    //Me conecto a la base de datos
    $conexion = new mysqli("localhost", "root", "", "futbol");
    if ($conexion->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
      }else {
      }


    


      while ($fila=$resultado->fetch_assoc()) {
        echo "<strong> Nombre: </strong> ".$fila["Nombre"].  "<br>";
        echo "<strong> Apodo: </strong> ".$fila["Apodo"].  "<br>";
        echo "<strong> Fundacion: </strong> ".$fila["Fundacion"].  "<br>";
        echo "<strong> Propietario: </strong> ".$fila["Propietario"].  "<br>";
        echo "<strong> Presidente: </strong> ".$fila["Presidente"].  "<br>";
        echo "<strong> Director Deportivo: </strong> ".$fila["Director Deportivo"].  "<br>";
        echo "<strong> Entrenador: </strong> ".$fila["Entrenador"].  "<br>";
        }
    ?>


  </body>
</html>
