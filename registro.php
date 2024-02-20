<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casa de Día - Registro</title>
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
        form {
            max-width: 500px;
            margin: 0 auto;
            padding: 25px;
            border: 2px solid #ccc;
            border-radius: 2px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="tel"], input[type="email"], textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="submit"] {
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #2980b9;
        }
    </style>
    <link rel="stylesheet" href="inicio_de_sesion/css/style.css">
</head>

<body>
    <p align="center"><b class="img-1"><img src="logos/logo_1.jpg"></b></p>

    <table class="tabla">
        <tr>
            <td>R E G I S T R O</td>
        </tr>
    </table>

    <body>
    <form action="procesar_registro.php" method="post">
    <form action="upload.php" method="POST" enctype="multipart/form-data">

        <h1>Registro de Usuario</h1>

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br><br>
        
        <label for="primer_apellido">Primer Apellido:</label>
        <input type="text" name="primer_apellido" required><br><br>
        
        <label for="segundo_apellido">Segundo Apellido:</label>
        <input type="text" name="segundo_apellido" required><br><br>
        
        <label for="curp">CURP:</label>
        <input type="text" maxlength="18" name="curp" required><br><br>
        
        <label for="domicilio">Domicilio:</label>
        <textarea name="domicilio" rows="4" cols="50" required></textarea><br><br>
        
        <label for="padecimiento_medico">Padecimiento Médico:</label>
        <input type="text" name="padecimiento_medico" required><br><br>
        
        <label for="telefono">Número de Teléfono:</label>
        <input type="tel" maxlength="11" name="telefono" required><br><br>
        
        <label for="telefono_pariente">Número de Teléfono de un Pariente:</label>
        <input type="tel" maxlength="11" name="telefono_pariente" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>
        
        <label for="actividad">Actividad a Realizar:</label>
        <select name="actividad" required>
            <option value="Cahibol">Cahibol</option>
            <option value="Atletismo">Atletismo</option>
            <option value="Cocina">Cocina</option>
            <option value="Danzon">Danzon</option>
            <option value="Futbol">Futbol</option>
            <option value="Tai Chi Chuan">Tai Chi Chuan</option>
            <option value="Tenis de Mesa">Tenis de Mesa</option>
        
        <input type="submit" value="Registrarse">
    </form>
</body>
    </html>