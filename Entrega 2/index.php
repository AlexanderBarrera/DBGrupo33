<?php include('templates/header.html');   ?>

<body>

  <h1>Agencia de turismo XXXXX</h1>
  <p>Aqui podrás planificar tu próximo viaje</p>

  <br>

  <h3>Consulta por tipo y nombre:</h3>
  <!-- Consultas:
  1. Dada una regi´on, muestre todos los platos de los restaurantes ubicados en dicha regi´on.
  2. Dado un n´umero de estrellas, muestre todas las habitaciones de hoteles con m´as de esa
  cantidad de estrellas, junto al nombre del hotel en el que est´a.
  13. Muestre todas las reservas a habitaciones realizadas por el usuario con id i entre las
  fechas a y b.
  4. Entregue todos los tour de las agencias que est´an presente s´olo en una regi´on.
  5. Para cada regi´on, entregue la habitaci´on que ha sido reservada m´as veces.
  6. Entregue todos los usuarios que han reservado la habitaci´on m´as barata en la regi´on
  II.
  7. Dado un id de reserva, muestre el nombre del usuario que hizo la reserva junto al monto
  total que paga por esa reserva.
  8. Dado un n´umero i, entrega la i-´esima habitaci´on m´as cara. En caso de empate muestre
  las dos 
  Comandos:
  \copy restaurantes (id_restaurante, nombre, direccion, telefono, descripcion, id_region) from 'datos/impar/restaurante' DELIMITER ';' CSV;
  -->

  <!-- 1. Dada una regi´on, muestre todos los platos de los restaurantes ubicados en dicha regi´on. -->
  <form action="consultas/consulta_platos_region.php" method="post">
    Región
    <input type="text" name="nombre_region">
    <br/><br/>
    <input type="submit" value="Buscar">
  </form>
  <br>
  <br>
  <br>

  <!-- <h3>Consulta Pokemones mas altos que:</h3>

  <form action="consultas/consulta_altura.php" method="post">
    Altura Mínima:
    <input type="text" name="altura">
    <br/><br/>
    <input type="submit" value="Buscar">
  </form>
  <br>
  <br>
  <br>

  <h3>Consulta de selección por tipo:</h3>

  <form action="consultas/consulta_tipo.php" method="post">
    Ingresar un tipo:
    <select name="tipo">
      <?php
      #Para cada tipo agregamos el tag <option value=value_of_param> visible_value </option>
      foreach ($dataCollected as $d) {
        echo "<option value=$d[0]>$d[0]</option>";
      }
      ?>
    </select>
    <br><br>
    <input type="submit" value="Buscar por tipo">
  </form> -->
  <br><br><br><br>
</body>
</html>
