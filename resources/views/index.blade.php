
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <span class="d-block p-2 text-bg-primary">Mantenimiento de Proyectos - Formulario Nuevo Ingreso</span>
        <span class="d-block p-2 text-bg-dark">Flor Naves</span>
        <br>
        <br>
        <title>Ingreso Nuevo Proyecto</title>
</head>
<body>
        
</body>
</html>


<?php


?>




<div class="container px-4 text-star" style="width: 60rem;" >
  <div class="col-10 col-md-8">
   <div class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end">
<form  action="crear" method="post">
@csrf
  <div >
    <label for="exampleInputNombreProyecto" class="text-start">Nombre Proyecto</label>
    <input type="text" class="form-control" id="exampleInputNombreProyecto" aria-describedby="NombreProyecto" name="NombreProyecto">
  </div>
  <div >
    <label for="exampleInputFuenteFondos" class="text-start"> Fuente Fondos</label>
    <input type="text" class="form-control" id="exampleInputFuenteFondos" aria-describedby="FuenteFondos" name="FuenteFondos">
  </div>
  <div >
    <label for="exampleInputMontoPlanificado" class="text-start"> Monto Planificado</label>
    <input type="text" class="form-control" id="exampleInputMontoPlanificado" aria-describedby="MontoPlanificado" name="MontoPlanificado">
  </div>
  <div >
    <label for="exampleInputMontoPatrocinado" class="text-start"> Monto Planificado</label>
    <input type="text" class="form-control" id="exampleInputMontoPatrocinado" aria-describedby="MontoPatrocinado" name="MontoPatrocinado">
  </div>
  <div >
    <label for="exampleInputMontoFondosPropios" class="text-start">Monto FP</label>
    <input type="text" class="form-control" id="exampleInputMontoFondosPropios" aria-describedby="MontoFondosPropios" name="MontoFondosPropios">
  </div>

  
<br>
   <button type="submit" class="btn btn-primary"  name="guardar" value="Guardar">Guardar</button>
</form>

</div>
    </div>

 
  </div>





