<?php include('../templates/header.html');   ?>

<body>
   <!--   5. Para cada regi´on, entregue la habitaci´on que ha sido reservada m´as veces.-->
  <?php
  require("../config/conexion.php"); #Llama a conexión, crea el objeto PDO y obtiene la variable $db

  echo "<h1> Habitaciones más reservada por región </h1>";
  
  $query = "SELECT RE.nombre, HA.id_habitacion, HO.nombre, count(HA.id_habitacion) as popular FROM hoteles HO, hotel_habit HO_HA, habitaciones HA, hotel_region HO_RE, regiones RE WHERE HO.id_hotel = HO_HA.id_hotel AND HO.id_hotel = HO_RE.id_hotel GROUP BY RE.id_region, HA.nombre ORDER BY popular DESC LIMIT 1;";
  $result = $db -> prepare($query);
  $result -> execute();
  $dataCollected = $result -> fetchAll(); #Obtiene todos los resultados de la consulta en forma de un arreglo
  ?>
    <style type="text/css">
  .myTable { width:400px;background-color:#eee;border-collapse:collapse; }
  .myTable th { background-color:#000;color:white;width:50%; }
  .myTable td, .myTable th { padding:5px;border:1px solid #000; }
  </style>

  <table class="muTable">
    <tr>
      <th>Región</th>
      <th>Habitación más popular</th>
      <th>Hotel</th>
      <th>Veces reservada</th>
    </tr>
  <?php
  foreach ($dataCollected as $p) {
    echo "<tr> <td>$p[0]</td> <td>$p[1]</td>  <td>$p[2]</td> <td>$p[3]</td> </tr>";
  }
  ?>
  </table>

<?php include('../templates/footer.html'); ?>
