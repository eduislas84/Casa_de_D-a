<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = md5($_POST["password"]);
    
    // Consultar la base de datos para verificar el usuario
    $sql = "SELECT * FROM usuarios WHERE username = '$username' AND password = '$password'";
    $result = $con->query($sql);
    
    if ($result->num_rows == 1) {
        header("Location: pagina_restringida.php");
        exit(); // Asegura que el script se detenga después de redirigir
    } else {
        // Credenciales inválidas, mostrar mensaje de error o hacer lo que sea necesario
        echo "Usuario o contraseña incorrectos";
    }
}
?>
