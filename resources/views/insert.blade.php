@extends("plantilla")

@section("cabecera")

@section("contenido")

<form method="post">
    @csrf
        Nombre Proyecto: <input type="text" name="NombreProyecto">
        <BR>
        Fuente Fondos: <input type="text" name="FuenteFondos">
        <br>
        Monto Planificado: <input type="text" name="MontoPlanificado">
        <br>
        Monto Patrocinado: <input type="text" name="MontoPatrocinado">
        <br>
        Monto FP: <input type="text" name="MontoFondosPropios">
        <br>
        <input type="submit" name="enviar" value="enviar">

</form>