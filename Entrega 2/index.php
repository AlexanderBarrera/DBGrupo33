<?php include('templates/header.html');   ?>

<body>

  <h1>Agencia de turismo XXXXX</h1>
  <p>Aqui podrás planificar tu próximo viaje</p>

  <br>

  <h3>Consulta por tipo y nombre:</h3>
  <!-- Consultas:
  4. Entregue todos los tour de las agencias que est´an presente s´olo en una regi´on.
  5. Para cada regi´on, entregue la habitaci´on que ha sido reservada m´as veces.
  6. Entregue todos los usuarios que han reservado la habitaci´on m´as barata en la regi´on
  II.
  7. Dado un id de reserva, muestre el nombre del usuario que hizo la reserva junto al monto
  total que paga por esa reserva.
  8. Dado un n´umero i, entrega la i-´esima habitaci´on m´as cara. En caso de empate muestre
  las dos 
  Comandos:
  \copy restaurantes (id_restaurante, nombre, direccion, telefono, descripcion, id_region) from 'datos/impar/restaurante' DELIMITER ';' CSV HEADER;
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

  <!--   2. Dado un n´umero de estrellas, muestre todas las habitaciones de hoteles con m´as de esa -->

  <form action="consultas/consulta_estrellas_habitaciones.php" method="post">
    Número de estrellas mínimas (1 a 5)
    <input type="number" name="estrellas" min="1" max="5">
    <br/><br/>
    <input type="submit" value="Buscar">
  </form>
  <br>
  <br>
  <br>
   <!--   3. Muestre todas las reservas a habitaciones realizadas por el usuario con id i entre las
  fechas a y b. -->

   <form action="consultas/consulta_reservas_usuario_fechas.php" method="post">
    ID del usuario
    <input type="number" name="user_id">
    <br/><br/>
    Fecha inicio
    <input type="date" name="fecha_inicio">
    <br/><br/>
    Fecha término
    <input type="date" name="fecha_termino">
    <br/><br/>
    <input type="submit" value="Buscar">
  </form>
  <br>
  <br>
  <br>

  <!--   4. Entregue todos los tour de las agencias que est´an presente s´olo en una regi´on.-->
  <form action="consultas/tours_unica_region.php" method="post">
  Tours de las agencias que están presentes sólo en una región
  <input type="submit" value="Buscar">
  </form>
  <br>
  <br>
  <br>


  <br><br><br><br>
</body>
</html>
