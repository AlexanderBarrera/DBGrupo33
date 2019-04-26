<?php include('templates/header.html');   ?>
 <div class="col center">
   <div class="row justify-content-center">
	<h1>Agencia de turismo ROnCHA</h1>
   </div>
   <div class="row justify-content-center">
   <p>Aqui podrás planificar tu próximo viaje</p>
   </div>
   <div class="row justify-content-center">
     <p> </p>
   </div>
   <div class="row justify-content-center">
		<h3>Consulta 1</h3>
    <!-- 1. Dada una regi´on, muestre todos los platos de los restaurantes ubicados en dicha regi´on. -->
   </div>
   <div class="row justify-content-center">
	<form action="consultas/consulta_platos_region.php" method="post">
      <div class="form-group">
	    <label for="cons1">Seleccionar región</label>
        <select class="custom-select" name="nombre_region" id="cons1">
          <option value='Antofagasta'>Antofagasta</option>
		  <option value='Araucanía'>Araucanía</option>
		  <option value='Arica y Parinacota'>Arica y Parinacota</option>
		  <option value='Atacama'>Atacama</option>
		  <option value='Aysén del General Carlos Ibáñez del Campo'>Aysén del General Carlos Ibáñez del Campo</option>
		  <option value='Biobio'>Biobio</option>
		  <option value='Coquimbo'>Coquimbo</option>
		  <option value="Libertador General Bernardo O'Higgins">Libertador General Bernardo O'Higgins</option>
		  <option value='Los Lagos'>Los Lagos</option>
		  <option value='Los Ríos'>Los Ríos</option>
		  <option value='Magallanes y de la Antártica Chilena'>Magallanes y de la Antártica Chilena</option>
		  <option value='Maule'>Maule</option>
		  <option value='Metropolitana de Santiago'>Metropolitana de Santiago</option>
		  <option value='Ñuble'>Ñuble</option><option value='Tarapacá'>Tarapacá</option>
		  <option value='Valparaíso'>Valparaíso</option>                        
        </select>
	  </div>
	  <button type="submit" class="btn btn-secondary">Buscar</button>
    </form>
   </div>
   <div class="row justify-content-center">
     <p> </p>
   </div>
   <div class="row justify-content-center">
    <h3>Consulta 2</h3>
    <!--   2. Dado un n´umero de estrellas, muestre todas las habitaciones de hoteles con m´as de esa -->
   </div>
   <div class="row justify-content-center">
    <form action="consultas/consulta_estrellas_habitaciones.php" method="post">
     <div class="form-group">
	   <label for="cons2">Seleccione el número de estrellas mínimas</label>
	   <select class="custom-select" name="estrellas" id="cons2">
		  <option value=1>1</option>
		  <option value=2>2</option>
		  <option value=3>3</option>
		  <option value=4>4</option>
		  <option value=5>5</option>
        </select>
     </div> 
     <button type="submit" class="btn btn-secondary">Buscar</button>
    </form>
   </div>
   <div class="row justify-content-center">
     <p> </p>
   </div>
   <div class="row justify-content-center">
    <h3>Consulta 3</h3>
    <!--   3. Muestre todas las reservas a habitaciones realizadas por el usuario con id i entre las
    fechas a y b. -->
   </div>
   <div class="row justify-content-center">
     <form action="consultas/consulta_reservas_usuario_fechas.php" method="post">
	  <div class="form-group">
	    <label for="cons3a">Introducir ID del usuario</label>
        <input type="number" name="user_id" id="cons3a">
	  </div>
	  <div class="form-group">
	    <label for="cons3b">Introducir fecha inicio</label>
        <input type="date" name="fecha_inicio" id="cons3b">
	  </div>
	  <div class="form-group">
	    <label for="cons3c">Introducir fecha término</label>
        <input type="date" name="fecha_termino" id="cons3c">
	  </div>
      <button type="submit" class="btn btn-secondary">Buscar</button>
	 </form>
   </div>
   <div class="row justify-content-center">
     <p> </p>
   </div>
   <div class="row justify-content-center">
    <h3>Consulta 4</h3>
    <!--   4. Entregue todos los tour de las agencias que est´an presente s´olo en una regi´on.-->
   </div>
   <div class="row justify-content-center">   
	<form action="consultas/tours_unica_region.php" method="post">
     <div class="form-group">
	   <label>Tours de las agencias que están presentes sólo en una región</label>
	 </div>
    <button type="submit" class="btn btn-secondary">Buscar</button>
    </form>
   </div>
   <div class="row justify-content-center">
     <p> </p>
   </div>
   <div class="row justify-content-center">
    <h3>Consulta 5</h3>
    <!--   5. Para cada regi´on, entregue la habitaci´on que ha sido reservada m´as veces.-->
   </div>
   <div class="row justify-content-center">
	<form action="consultas/consulta_habitacion_region.php" method="post">
	 <div class="form-group">
	   <label>Habitaciones más populares por región</label>
	 </div>
    <button type="submit" class="btn btn-secondary">Buscar</button>
    </form>
   </div>
   <div class="row justify-content-center">
     <p> </p>
   </div>
   <div class="row justify-content-md-center">   
    <h3>Consulta 6</h3>
    <!--    6. Entregue todos los usuarios que han reservado la habitaci´on m´as barata en la regi´on
    II.-->
   </div>
   <div class="row justify-content-center">
    <form action="consultas/consulta_reservas_region_barata.php" method="post">
    <div class="form-group">
	   <label>Usuarios que han reservado la habitación más barata de le región II</label>
	 </div>
    <button type="submit" class="btn btn-secondary">Buscar</button>
    </form>
   </div>
   <div class="row justify-content-center">
     <p> </p>
   </div>
   <div class="row justify-content-md-center">
    <h3>Consulta 7</h3>
      <!--    7. Dado un id de reserva, muestre el nombre del usuario que hizo la reserva junto al monto
    total que paga por esa reserva. -->
   </div>
   <div class="row justify-content-center">
    <form action="consultas/consulta_usuario_reserva_monto.php" method="post">
      <div class="form-group">
	   <label for="cons7">Introducir el ID de la reserva</label>
	   <input type="number" name="id" min="0" id="cons7">
	 </div>
      <button type="submit" class="btn btn-secondary">Buscar</button>
    </form>
   </div>
   <div class="row justify-content-center">
     <p> </p>
   </div>
   <div class="row justify-content-md-center">
    <h3>Consulta 8</h3>
    <!--
    8. Dado un n´umero i, entrega la i-´esima habitaci´on m´as cara. En caso de empate muestre
    las dos 
    -->
   </div>
   <div class="row justify-content-center">
    <form action="consultas/consulta_iesima.php" method="post">
	  <div class="form-group">
	   <label for="cons8">Introducir el índice i para la i-ésiama habitación mas cara</label>
	   <input type="number" name="i" min="0" id="cons8">
	  </div>
      <button type="submit" class="btn btn-secondary">Buscar</button>
     </form>
   </div>
  </div>
</html>
