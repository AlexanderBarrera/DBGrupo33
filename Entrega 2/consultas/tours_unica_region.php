<?php include('../templates/header.html');   ?>

<body>
  <!--   4. Entregue todos los tour de las agencias que est´an presente s´olo en una regi´on.-->
  <?php
  require("../config/conexion.php"); #Llama a conexión, crea el objeto PDO y obtiene la variable $db

  echo "<h1>Tours de agencias presentes en solo una region</h1>";


  $query = "SELECT T.id_tour, T.descripcion FROM tours T, agencias A, tour_agencia TA WHERE T.id_tour = TA.id_tour AND A.id_agencia = TA.id_agencia AND 1=(Select count(*) FROM agencia_region AR WHERE AR.id_agencia = A.id_agencia);";
  $result = $db -> prepare($query);
  $result -> execute();
  $dataCollected = $result -> fetchAll(); #Obtiene todos los resultados de la consulta en forma de un arreglo
  ?>

  <table>
    <tr>
      <th>ID Tour</th>
      <th>Descripción</th>
    </tr>
  <?php
  foreach ($dataCollected as $p) {
    echo "<tr> <td>$p[0]</td> <td>$p[1]</td></tr>";
  }
  ?>
  </table>

<?php include('../templates/footer.html'); ?>
