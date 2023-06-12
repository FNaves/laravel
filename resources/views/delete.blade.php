<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<span class="d-block p-2 text-bg-primary">Mantenimiento de Proyectos - Proyecto Eliminado</span>
<span class="d-block p-2 text-bg-dark">Flor Naves</span>

<?php

//$mysqli=mysqli_connect('localhost','root','root','devgobdb');

require_once('../resources/views/dbConnect.php');
$id = $_GET['id'];


$result = mysqli_query($mysqli, "DELETE FROM proyectos WHERE id = $id");


echo "<p><font color='green'>Registro Eliminado !!!</p>";
echo "<a href='index'>Ver Datos</a>";

