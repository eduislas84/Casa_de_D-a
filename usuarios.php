<?php
$conexion = mysqli_connect('localhost', 'root', '', 'registros');

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['eliminar'])) {
    $id = $_GET['eliminar'];

    // Eliminar el registro de la tabla
    $sql = "DELETE FROM new_usuarios WHERE id = $id";

    if (mysqli_query($conexion, $sql)) {
        echo "Registro eliminado exitosamente";
    } else {
        echo "Error al eliminar el registro: " . mysqli_error($conexion);
    }
}

$sql = "SELECT * from new_usuarios";
$result = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casa de Día - Usuarios</title>
    <link rel="shortcut icon" href="logos/logo_2.jpeg" type="image/x-icon">
    <style>
        .tabla {
            background-color: #1e525e;
            color: white;
            text-align: center;
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 10px;
        }
    </style>
    <link rel="stylesheet" href="inicio_de_sesion/css/style.css">
</head>

<body>
    <p align="center"><b class="img-1"><img src="logos/logo_1.jpg"></b></p>

    <!-- Barra de Inicio -->
    <table class="tabla">
        <tr>
            <td>U S U A R I O S</td>
        </tr>
    </table>

    <br>

    <table border="1">
        <tr>
            <td>id</td>
            <td>nombre</td>
            <td>primer_apellido</td>
            <td>segundo_apellido</td>
            <td>curp</td>
            <td>domicilio</td>
            <td>padecimiento_medico</td>
            <td>telefono</td>
            <td>telefono_pariente</td>
            <td>email</td>
            <td>actividad</td>
            <td>Acciones</td> <!-- Columna para botones de acción -->
        </tr>

        <?php
        while ($mostrar = mysqli_fetch_array($result)) {
            ?>

            <tr>
                <td><?php echo $mostrar['id'] ?></td>
                <td><?php echo $mostrar['nombre'] ?></td>
                <td><?php echo $mostrar['primer_apellido'] ?></td>
                <td><?php echo $mostrar['segundo_apellido'] ?></td>
                <td><?php echo $mostrar['curp'] ?></td>
                <td><?php echo $mostrar['domicilio'] ?></td>
                <td><?php echo $mostrar['padecimiento_medico'] ?></td>
                <td><?php echo $mostrar['telefono'] ?></td>
                <td><?php echo $mostrar['telefono_pariente'] ?></td>
                <td><?php echo $mostrar['email'] ?></td>
                <td><?php echo $mostrar['actividad'] ?></td>
                <td>
                    <a href="editar.php?id=<?php echo $mostrar['id']; ?>">Editar</a>
                    <a href="?eliminar=<?php echo $mostrar['id']; ?>">Eliminar</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>

</body>
</html>
