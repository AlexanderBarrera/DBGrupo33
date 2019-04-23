<?php include('../templates/header.html');   ?>

<body>
    <!--   3. Muestre todas las reservas a habitaciones realizadas por el usuario con id i entre las
  fechas a y b. -->
  <?php
  require("../config/conexion.php"); #Llama a conexión, crea el objeto PDO y obtiene la variable $db

  $id = $_POST["user_id"];
  $id = (int)$id;
  $f_i = $_POST["fecha_inicio"];
  $f_t = $_POST["fecha_termino"];

  echo "<h1> Reservas del usuario $id entre el $f_i y $f_t </h1>";

  $query = "SELECT RE.id_reserva FROM reservas RE, reservas_usuarios RE_U WHERE RE_U.id_usuario = $id AND RE.id_reserva = RE_U.id_reserva AND RE.fecha_inicio != TO_DATE($f_i, 'YYYY-MM-DD') AND RE.fecha_fin != TO_DATE($f_t, 'YYYY-MM-DD');";
  $result = $db -> prepare($query);
  $result -> execute();
  $dataCollected = $result -> fetchAll(); #Obtiene todos los resultados de la consulta en forma de un arreglo
  ?>

  <table>
    <tr>
      <th>ID reserva</th>
    </tr>
  <?php
  foreach ($dataCollected as $p) {
    echo "<tr> <td>$p[0]</td> </tr>";
  }
  ?>
  </table>

<?php include('../templates/footer.html'); ?>
