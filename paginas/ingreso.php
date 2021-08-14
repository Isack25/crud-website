<!--Creado por - ISAAC TOVAR-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Usuario dado de Alta</title>
    <style>*{font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;}</style>
</head>
<body bgcolor="#D0EBFF">
    <center><h1>Alta de estudiantes</h1></center>
    <?php
        $conexion = mysqli_connect("localhost", "root", "", "base1") or
        die("Problemas con la conexión");

        mysqli_query($conexion, "insert into alumnos (nombre, mail,codigocurso) values
                                ('$_REQUEST[nombre]', '$_REQUEST[mail]', $_REQUEST[codigocurso])") 
        or die("Problemas en el select" . mysqli_error($conexion));
    
        mysqli_close($conexion);

        echo "<center>El estudiante fue dado de alta</center>";
    ?>
    <br>
    <center>
        <img src="../img/aceptado.png" width="150px">
    </center>
    
</body>
</html>