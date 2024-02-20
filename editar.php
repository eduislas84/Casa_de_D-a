<?php
include 'conexion2.php'; // Incluir el archivo de conexión

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores del formulario
    $id = $_POST['id']; // Obtener el ID del registro a editar
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

    // Actualizar datos en la tabla
    $sql = "UPDATE new_usuarios SET 
            nombre = '$nombre',
            primer_apellido = '$primer_apellido',
            segundo_apellido = '$segundo_apellido',
            curp = '$curp',
            domicilio = '$domicilio',
            padecimiento_medico = '$padecimiento_medico',
            telefono = '$telefono',
            telefono_pariente = '$telefono_pariente',
            email = '$email',
            actividad = '$actividad'
            WHERE id = $id";

    if ($con->query($sql) === TRUE) {
        echo "Actualización exitosa";
        header('Location: pagina_restringida.php');
        exit(0);
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
} else {
    // Obtener el ID del registro a editar desde la URL
    $id = $_GET['id']; // Asegúrate de validar y limpiar esta entrada

    // Obtener los datos actuales del registro
    $sql = "SELECT * FROM new_usuarios WHERE id = $id";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();
}

$con->close(); // Cerrar la conexión
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casa de Día - Editar</title>
    <link rel="shortcut icon" href="logos/logo_2.jpeg" type="image/x-icon">
</head>

<body>
    <p align="center"><b class=".img-1"><img src="logos/logo_1.jpg"></b></p>


<!DOCTYPE html>
<html>
<head>
    <title>Editar Registro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Editar Registro</h2>
        <form method="post" action="editar.php">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <div class="form-group">
                <label>Nombre:</label>
                <input type="text" class="form-control" name="nombre" value="<?php echo $row['nombre']; ?>">
            </div>
            <div class="form-group">
                <label>Primer Apellido:</label>
                <input type="text" class="form-control" name="primer_apellido" value="<?php echo $row['primer_apellido']; ?>">
            </div>
            <div class="form-group">
                <label>Segundo Apellido:</label>
                <input type="text" class="form-control" name="segundo_apellido" value="<?php echo $row['segundo_apellido']; ?>">
            </div>
            <div class="form-group">
                <label>CURP:</label>
                <input type="text" class="form-control" name="curp" value="<?php echo $row['curp']; ?>">
            </div>
            <div class="form-group">
                <label>Domicilio:</label>
                <input type="text" class="form-control" name="domicilio" value="<?php echo $row['domicilio']; ?>">
            </div>
            <div class="form-group">
                <label>Padecimiento Médico:</label>
                <input type="text" class="form-control" name="padecimiento_medico" value="<?php echo $row['padecimiento_medico']; ?>">
            </div>
            <div class="form-group">
                <label>Teléfono:</label>
                <input type="text" class="form-control" name="telefono" value="<?php echo $row['telefono']; ?>">
            </div>
            <div class="form-group">
                <label>Teléfono Pariente:</label>
                <input type="text" class="form-control" name="telefono_pariente" value="<?php echo $row['telefono_pariente']; ?>">
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="text" class="form-control" name="email" value="<?php echo $row['email']; ?>">
            </div>
            <div class="form-group">
                <label for="actividad">Actividad a Realizar:</label>
                <select class="form-control" name="actividad" required>
                    <option value="Cahibol" <?php if ($row['actividad'] === 'Cahibol') echo 'selected'; ?>>Cahibol</option>
                    <option value="Atletismo" <?php if ($row['actividad'] === 'Atletismo') echo 'selected'; ?>>Atletismo</option>
                    <option value="Cocina" <?php if ($row['actividad'] === 'Cocina') echo 'selected'; ?>>Cocina</option>
                    <option value="Danzon" <?php if ($row['actividad'] === 'Danzon') echo 'selected'; ?>>Danzon</option>
                    <option value="Futbol" <?php if ($row['actividad'] === 'Futbol') echo 'selected'; ?>>Futbol</option>
                    <option value="Tai Chi Chuan" <?php if ($row['actividad'] === 'Tai Chi Chuan') echo 'selected'; ?>>Tai Chi Chuan</option>
                    <option value="Tenis de Mesa" <?php if ($row['actividad'] === 'Tenis de Mesa') echo 'selected'; ?>>Tenis de Mesa</option>
                </select>
            </div>
        
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</body>
</html>
