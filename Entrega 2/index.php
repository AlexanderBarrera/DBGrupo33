<?php include('templates/header.html');   ?>
    <h1>Agencia de turismo ROnCHA</h1>
    <p>Aqui podrás planificar tu próximo viaje</p>

    <br>

    <h3>Consultas</h3>


    <!-- 1. Dada una regi´on, muestre todos los platos de los restaurantes ubicados en dicha regi´on. -->
    <form action="consultas/consulta_platos_region.php" method="post">
      Región
      <select name="nombre_region">
        <option value='Antofagasta'>Antofagasta</option><option value='Araucanía'>Araucanía</option><option value='Arica y Parinacota'>Arica y Parinacota</option><option value='Atacama'>Atacama</option><option value='Aysén del General Carlos Ibáñez del Campo'>Aysén del General Carlos Ibáñez del Campo</option><option value='Biobio'>Biobio</option><option value='Coquimbo'>Coquimbo</option><option value="Libertador General Bernardo O'Higgins">Libertador General Bernardo O'Higgins</option><option value='Los Lagos'>Los Lagos</option><option value='Los Ríos'>Los Ríos</option><option value='Magallanes y de la Antártica Chilena'>Magallanes y de la Antártica Chilena</option><option value='Maule'>Maule</option><option value='Metropolitana de Santiago'>Metropolitana de Santiago</option><option value='Ñuble'>Ñuble</option><option value='Tarapacá'>Tarapacá</option><option value='Valparaíso'>Valparaíso</option>                        
      </select>
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

    <!--   5. Para cada regi´on, entregue la habitaci´on que ha sido reservada m´as veces.-->
    <form action="consultas/consulta_habitacion_region.php" method="post">
    Habitaciones más populares por región
    <input type="submit" value="Buscar">
    </form>
    <br>
    <br>
    <br>

    <!--    6. Entregue todos los usuarios que han reservado la habitaci´on m´as barata en la regi´on
    II.-->
    <form action="consultas/consulta_reservas_region_barata.php" method="post">
    Usuarios que han reservado la habitación más barata de le región II
    <input type="submit" value="Buscar">
    </form>
    <br>
    <br>
    <br>

      <!--    7. Dado un id de reserva, muestre el nombre del usuario que hizo la reserva junto al monto
    total que paga por esa reserva. -->

    <form action="consultas/consulta_usuario_reserva_monto.php" method="post">
      Búsqueda por ID de la reserva
      <input type="number" name="id" min="0">
      <br/><br/>
      <input type="submit" value="Buscar">
    </form>
    <br>
    <br>
    <br>

    <!--
    8. Dado un n´umero i, entrega la i-´esima habitaci´on m´as cara. En caso de empate muestre
    las dos 
    -->

    

    <form action="consultas/consulta_iesima.php" method="post">
      i-ésiama habitación mas cara
      <input type="number" name="i" min="0">
      <br/><br/>
      <input type="submit" value="Buscar" >
    </form>

    <br><br><br><br>
</html>
