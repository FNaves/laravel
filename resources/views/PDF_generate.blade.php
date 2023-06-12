<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador PDF</title>
</head>
<?php
// Include the database connection file
//$mysqli=mysqli_connect('localhost','root','root','devgobdb');
require_once('../resources/views/dbConnect.php');
$id = $_GET['id'];
//$id = mysqli_real_escape_string($mysqli, $_POST['id']);

$resultado = mysqli_query($mysqli, "SELECT * FROM proyectos WHERE id = $id");
$res= mysqli_fetch_assoc($resultado);
$NombreProyecto = $res['NombreProyecto'];
$MontoPlanificado = $res['MontoPlanificado'];
$MontoPatrocinado = $res['MontoPatrocinado'];
$MontoFondosPropios = $res['MontoFondosPropios'];

   ?>

<body>
    <h1><center>Información de Proyecto</center></h1>
    <br>
    <h3> Id Proyecto: {{$id}}  </h3>
    <br>
    <h3> Nombre de Proyecto: {{$NombreProyecto}}  </h3>
    <br>
    <h3> Monto Planificado de Proyecto $: {{$MontoPlanificado}}  </h3>
    <br>
    <h3> Monto Patrocinado de Proyecto $: {{$MontoPatrocinado}}  </h3>
    <br>
    <h3> Monto Fondos Propios de Proyecto $: {{$MontoFondosPropios}}  </h3>

</body>
</html>