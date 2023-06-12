<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <span class="d-block p-2 text-bg-primary">Mantenimiento de Proyectos - Actualizacion Proyectos</span>
        <span class="d-block p-2 text-bg-dark">Flor Naves</span>
      
    </head>
    <body>

    
<?php
      
      //$mysqli=mysqli_connect('localhost','root','root','devgobdb');
      require_once('../resources/views/dbConnect.php');
      //$id=$_REQUEST['id'];
      
      $id = $_GET['id'];



      $resultado = mysqli_query($mysqli, "SELECT * FROM proyectos WHERE id = $id");
      

      // Fetch the next row of a result set as an associative array
      $res= mysqli_fetch_assoc($resultado);


        

        $NombreProyecto = $res['NombreProyecto'];
        $FuenteFondos = $res['FuenteFondos'];
        $MontoPlanificado = $res['MontoPlanificado'];
        $MontoPatrocinado = $res['MontoPatrocinado'];
        $MontoFondosPropios = $res['MontoFondosPropios'];
        
  
     

      
      //$id=mysqli_real_escape_string($resultado,$_POST['id']);
     
      /*$NombreProyecto=mysqli_real_escape_string($mysqli,$_POST['NombreProyecto']);
      $FuenteFondos=mysqli_real_escape_string($mysqli,$_POST['FuenteFondos']);
      $MontoPlanificado=mysqli_real_escape_string($mysqli,$_POST['MontoPlanificado']);
      $MontoPatrocinado=mysqli_real_escape_string($mysqli,$_POST['MontoPatrocinado']);
      $MontoFondosPropios=mysqli_real_escape_string($mysqli,$_POST['MontoFondosPropios']); ?> >Actualizar</button>
//echo $id;
*/
      //<button type="submit" class="btn btn-primary"  name="actualizar" value= <?php echo $id; 
    ?>

<div class="container px-4 text-star" style="width: 60rem;" >
  <div class="col-10 col-md-8">
   <div class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end">
<form  action="ActualizarT" method="post">
@csrf
<div >
    <label for="exampleInputid" class="text-start">Id Proyecto</label>
    <input type="text" class="form-control" id="exampleInputNombreid" aria-describedby="id" name="id" value="<?php echo $id; ?>"> 
  </div>
  <div >
    <label for="exampleInputNombreProyecto" class="text-start">Nombre Proyecto</label>
    <input type="text" class="form-control" id="exampleInputNombreProyecto" aria-describedby="NombreProyecto" name="NombreProyecto" value="<?php echo $NombreProyecto; ?>">
  </div>
  <div >
    <label for="exampleInputFuenteFondos" class="text-start"> Fuente Fondos</label>
    <input type="text" class="form-control" id="exampleInputFuenteFondos" aria-describedby="FuenteFondos" name="FuenteFondos" value="<?php echo $FuenteFondos; ?>">
  </div>
  <div >
    <label for="exampleInputMontoPlanificado" class="text-start"> Monto Planificado</label>
    <input type="text" class="form-control" id="exampleInputMontoPlanificado" aria-describedby="MontoPlanificado" name="MontoPlanificado" value="<?php echo $MontoPlanificado; ?>">
  </div>
  <div >
    <label for="exampleInputMontoPatrocinado" class="text-start"> Monto Planificado</label>
    <input type="text" class="form-control" id="exampleInputMontoPatrocinado" aria-describedby="MontoPatrocinado" name="MontoPatrocinado" value="<?php echo $MontoPatrocinado; ?>">
  </div>
  <div >
    <label for="exampleInputMontoFondosPropios" class="text-start">Monto FP</label>
    <input type="text" class="form-control" id="exampleInputMontoFondosPropios" aria-describedby="MontoFondosPropios" name="MontoFondosPropios" value="<?php echo $MontoFondosPropios; ?>">
  </div>

  
<br>

<td><input type="hidden" name="id" value=<?php echo $id; ?>></td>
				<td><input class='btn btn-primary'  type="submit" name="ActualizarT" value="Actualizar"></td>
</form>

</div>
    </div>

 
  </div>



    </body>
    </html>



    




    