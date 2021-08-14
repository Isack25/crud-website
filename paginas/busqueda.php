<!--Creado por - ISAAC TOVAR-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registro de todos los usuarios</title>
    <style>*{font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;}</style>
</head>
<body bgcolor="#D0EBFF">
    <h1 align="center">Ver todos los recursos</h1>
    <hr>
    <?php
    $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas de conexión");

    $registros = mysqli_query($conexion, "Select codigo, nombre, mail, codigocurso
                                        from alumnos") or
    die("Problemas en el select:" . mysqli_error($conexion));

    while ($reg = mysqli_fetch_array($registros)){
        echo"Codigo:" . $reg['codigo']. "<br>";
        echo"Nombre:" . $reg['nombre']. "<br>";
        echo"Mail:" . $reg['mail']. "<br>";
        echo "Curso:";
        switch($reg['codigocurso']){
            case 1:
                echo "PHP";
            break;
            case 2:
                echo "ASP";
            break;
            case 3:
                echo "JSP";
            break;
        }
        echo "<br><hr>";
    }
    ?>
</body>
</html>