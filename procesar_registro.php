<?php
include 'conexion2.php'; // Incluir el archivo de conexión

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores del formulario
    $nombre = $_POST['nombre'];
    $primer_apellido = $_POST['primer_apellido'];
    $segundo_apellido = $_POST['segundo_apellido'];
    $curp = $_POST['curp'];
    $domicilio = $_POST['domicilio'];
    $padecimiento_medico = $_POST['padecimiento_medico'];
    $telefono = $_POST['telefono'];
    $telefono_pariente = $_POST['telefono_pariente'];
    $email = $_POST['email'];
    $actividad = $_POST['actividad'];
    // ... (obtener los otros campos)

    // Insertar datos en la tabla
    $sql = "INSERT INTO new_usuarios (nombre, primer_apellido, segundo_apellido, curp, domicilio, padecimiento_medico, telefono, telefono_pariente, email, actividad)
            VALUES ('$nombre', '$primer_apellido', '$segundo_apellido', '$curp', '$domicilio', '$padecimiento_medico', '$telefono', '$telefono_pariente', '$email', '$actividad')";

    if ($con->query($sql) === TRUE) {
        echo "Registro exitoso";
        header('Location: pagina_restringida.php');
        exit(0);
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}

$con->close(); // Cerrar la conexión
?>

