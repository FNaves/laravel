<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=
  , initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

  <title>Proyecto PHP y Laravel</title>
</head>
<body>

  
</body>
</html>

<span class="d-block p-2 text-bg-primary">Mantenimiento de Proyectos</span>
<span class="d-block p-2 text-bg-dark">Flor Naves</span>

<br>
<a class="btn btn-primary" href="inicio" role="button">Agregar Nuevo Proyecto<a></td>
<br>
<br>


<?php
require_once("dbConnect.php");
 $resultado=mysqli_query($mysqli,"Select * from proyectos order by id asc");


?>

<table class="table" width="50%" align="center">
  <thead>
    <tr class="table-active">
    <th scope="col">ID</th>
      <th scope="col">Nombre Proyecto</th>
      <th scope="col">Fuente Fondos</th>
      <th scope="col">Monto Planificado</th>
      <th scope="col">Monto Patrocinado</th>
      <th scope="col">Monto Fondos propios</th>
      <th scope="col">Accion Modificar</th>
      <th scope="col">Accion Eliminar</th>
      <th scope="col">Generar PDF</th>
    </tr>
  </thead>
  <tbody class=table-group-divider>

<?php
while ($res=mysqli_fetch_assoc($resultado))
{

   
    echo "<tr>";
    echo "<th scope='row'>".$res['id']."</th>";
    echo "<td>".$res['NombreProyecto']."</td>";
    echo "<td>".$res['FuenteFondos']."</td>";
    echo "<td>".$res['MontoPlanificado']."</td>";
    echo "<td>".$res['MontoPatrocinado']."</td>";
    echo "<td >".$res['MontoFondosPropios']."</td>";
    echo "<td><a class='btn btn-primary' tabindex='-1' role='button' aria-disabled='true' href=\"actualizar?id=$res[id]\">Modificar</a>";
    echo "<td><a class='btn btn-primary' tabindex='-1' role='button' aria-disabled='true' href=\"borrar?id=$res[id]\">Eliminar</a>";
    echo "<td><a class='btn btn-primary' tabindex='-1' role='button' aria-disabled='true' href=\"pdf?id=$res[id]\">Generar Pdf</a>";
    echo "</tr>";

   

}
?>
 </tbody>
</table>
 <p>




    

    