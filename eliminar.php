<?php
include 'conexion2.php'; // Incluir el archivo de conexión

// Eliminar registro si se proporciona un ID válido
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['eliminar_id'])) {
    $eliminar_id = $_GET['eliminar_id'];
    
    $eliminar_sql = "DELETE FROM new_usuarios WHERE id = $eliminar_id";
    if ($con->query($eliminar_sql) === TRUE) {
        echo "Registro eliminado exitosamente";
    } else {
        echo "Error al eliminar registro: " . $con->error;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores del formulario
    // ... (código similar al que proporcionaste para la inserción)

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
