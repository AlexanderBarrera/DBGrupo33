<?php include('../templates/header.html');   ?>

<body>

  <?php
  require("../config/conexion.php"); #Llama a conexión, crea el objeto PDO y obtiene la variable $db

  $var = $_POST["nombre_region"];
  echo "<h1> Restaurantes en la region $var </h1>";
  // Para no tener problemas con los '
  $var = str_replace("'", "''", $var);
  $query = "SELECT RA.nombre, RE.nombre FROM Restaurantes RE, Regiones RA WHERE RA.nombre='$var' AND RE.id_region = RA.id_region;";
  $result = $db -> prepare($query);
  $result -> execute();
  $dataCollected = $result -> fetchAll(); #Obtiene todos los resultados de la consulta en forma de un arreglo
  ?>

  <table>
    <tr>
      <th>Region</th>
      <th>Nombre</th>
    </tr>
  <?php
  foreach ($dataCollected as $p) {
    echo "<tr> <td>$p[0]</td> <td>$p[1]</td></tr>";
  }
  ?>
  </table>

<?php include('../templates/footer.html'); ?>
