<?php include('../templates/header.html');   ?>

<body>
  <!--   7. Dado un id de reserva, muestre el nombre del usuario que hizo la reserva junto al monto
  total que paga por esa reserva.-->
  <?php
  require("../config/conexion.php"); #Llama a conexión, crea el objeto PDO y obtiene la variable $db

  $var = $_POST["id"];
  $var = (int)$var;

  echo "<h1> Costo total de la reserva de id: $var </h1>";

  
  $query = "SELECT U.nombre, SUM(HAB.precio) as total FROM usuarios U, reservas_usuarios R_U, reservas_habit RES_HAB, habitaciones HAB WHERE R_U.id_reserva = $var and U.id_usuario = R_U.id_usuario and RES_HAB.id_reserva = R_U.id_reserva and HAB.id_habitacion = RES_HAB.id_habitacion GROUP BY U.nombre;";


  $result = $db -> prepare($query);
  $result -> execute();
  $dataCollected = $result -> fetchAll(); #Obtiene todos los resultados de la consulta en forma de un arreglo
  ?>

  <table>
    <tr>
      <th>Usuario</th>
      <th>Precio total</th>
    </tr>
  <?php
  foreach ($dataCollected as $p) {
    echo "<tr> <td>$p[0]</td> <td>$p[1]</td></tr>";
  }
  ?>
  </table>

<?php include('../templates/footer.html'); ?>
