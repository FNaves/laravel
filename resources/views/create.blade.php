<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <span class="d-block p-2 text-bg-primary">Mantenimiento de Proyectos - Regresar a Selección</span>
        <span class="d-block p-2 text-bg-dark">Flor Naves</span>
      
    </head>
    <body>

    
<?php
       //require_once("dbConnect.php");
      $mysqli=mysqli_connect('localhost','root','root','devgobdb');

      //require_once("../config/database.php");
      $NombreProyecto=mysqli_real_escape_string($mysqli,$_POST['NombreProyecto']);
      $FuenteFondos=mysqli_real_escape_string($mysqli,$_POST['FuenteFondos']);
      $MontoPlanificado=mysqli_real_escape_string($mysqli,$_POST['MontoPlanificado']);
      $MontoPatrocinado=mysqli_real_escape_string($mysqli,$_POST['MontoPatrocinado']);
      $MontoFondosPropios=mysqli_real_escape_string($mysqli,$_POST['MontoFondosPropios']);







      

//requiere_once("")
    $resultado=mysqli_query($mysqli,"insert into proyectos(`NombreProyecto`,`FuenteFondos`,`MontoPlanificado`,`MontoPatrocinado`,`MontoFondosPropios`)values('$NombreProyecto','$FuenteFondos','$MontoPlanificado','$MontoPatrocinado','$MontoFondosPropios')");
    echo "<br>";
    echo "Dato ingresado exitosamente !!!";
    echo"<br>";
    
   

    ?>
<BR>

<p>
    <a href="index">Regresar pantalla principal</a>
</p>

    </body>
    </html>



    




    