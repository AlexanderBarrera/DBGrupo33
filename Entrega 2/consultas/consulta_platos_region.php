<?php include('../templates/header.html');   ?>

<body>

  <?php
  require("../config/conexion.php"); #Llama a conexión, crea el objeto PDO y obtiene la variable $db

  $var = $_POST["nombre_region"];
  echo "<h1> Platos en la region $var </h1>";
  // Para no tener problemas con los '
  $var = str_replace("'", "''", $var);
  $query = "SELECT RE.nombre, PLA.nombre FROM restaurantes RE, regiones RA, restaurantes_regiones RE_RA, platos PLA, restaurantes_platos RE_PLA  WHERE RA.nombre='$var' AND RE.id_restaurante = RE_RA.id_restaurante AND RA.id_region = RE_RA.id_region AND RE.id_restaurante = RE_PLA.id_restaurante;";
  $result = $db -> prepare($query);
  $result -> execute();
  $dataCollected = $result -> fetchAll(); #Obtiene todos los resultados de la consulta en forma de un arreglo
  ?>

  <table>
    <tr>
      <th>Restaurante</th>
      <th>Plato</th>
    </tr>
  <?php
  foreach ($dataCollected as $p) {
    echo "<tr> <td>$p[0]</td> <td>$p[1]</td></tr>";
  }
  ?>
  </table>

<?php include('../templates/footer.html'); ?>
