<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <span class="d-block p-2 text-bg-primary">Mantenimiento de Proyectos - Regresar a Selección</span>
        <span class="d-block p-2 text-bg-dark">Flor Naves</span>

<?php
// Include the database connection file
//$mysqli=mysqli_connect('localhost','root','root','devgobdb');
require_once('../resources/views/dbConnect.php');

$NombreProyecto=mysqli_real_escape_string($mysqli,$_POST['NombreProyecto']);
 $id = mysqli_real_escape_string($mysqli, $_POST['id']);
        $NombreProyecto=mysqli_real_escape_string($mysqli,$_POST['NombreProyecto']);
        $FuenteFondos=mysqli_real_escape_string($mysqli,$_POST['FuenteFondos']);
         $MontoPlanificado=mysqli_real_escape_string($mysqli,$_POST['MontoPlanificado']);
         $MontoPatrocinado=mysqli_real_escape_string($mysqli,$_POST['MontoPatrocinado']);
         $MontoFondosPropios=mysqli_real_escape_string($mysqli,$_POST['MontoFondosPropios']);
	
	$result = mysqli_query($mysqli, "UPDATE proyectos SET `NombreProyecto` = '$NombreProyecto', `FuenteFondos` = '$FuenteFondos', `MontoPlanificado` = '$MontoPlanificado', `MontoPatrocinado` = '$MontoPatrocinado',`MontoFondosPropios` = '$MontoFondosPropios' WHERE `id` = $id");
		
	echo "<p><font color='green'>Actualizado Exitosamente !!!</p>";
	echo "<a href='index'>Ver Resultados</a>";


   ?>