<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casa de Día - Inicio de Sesion</title>
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
            <td>INICIAR SESIÓN</td>
        </tr>
    </table>

    <div class="formulario">
        <form method="post" action="procesar_login.php">
            <!-- Envía los datos al archivo procesar_login.php -->
            <div class="username">
                <input type="text" name="username" required>
                <label>USUARIO</label>
            </div>
            <div class="contraseña">
                <input type="password" name="password" required>
                <label>CONTRASEÑA</label>
            </div>
            <input type="submit" value="Iniciar">
        </form>
    </div>



</html>
