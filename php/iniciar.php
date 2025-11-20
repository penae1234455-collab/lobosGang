<?php
session_start();
require_once __DIR__ . '/../config/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Conexión a la BD
    $database = new Database();
    $db = $database->getConnection();

    // Datos del formulario
    $email = trim($_POST['email']);
    $contrasena = $_POST['contrasena'];

    // Validación básica
    if (empty($email) || empty($contrasena)) {
        $_SESSION['error'] = "El correo y la contraseña son obligatorios.";
        header('Location: ../iniciar_sesion.php');
        exit;
    }

    try {
        // Buscar usuario por su correo
        $query = "SELECT id, nombre_completo, email, contrasena 
            FROM usuarios 
            WHERE email = :email";

        $stmt = $db->prepare($query);
        $stmt->bindParam(":email", $email);
        $stmt->execute();

        // Verifica si el usuario existe
        if ($stmt->rowCount() === 1) {
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

            // Verifica contraseña
            if (password_verify($contrasena, $usuario['contrasena'])) {

                // Crear sesion del usuario
                $_SESSION['user_id'] = $usuario['id'];
                $_SESSION['user_name'] = $usuario['nombre_completo'];
                $_SESSION['user_email'] = $usuario['email'];

                // Redirigir a la página del usuario (manada)
                header('Location: ../usuario.php');
                exit;

            } else {
                $_SESSION['error'] = "La contraseña es incorrecta.";
                header('Location: ../iniciar_sesion.php');
                exit;
            }

        } else {
            $_SESSION['error'] = "No existe un lobo registrado con ese correo.";
            header('Location: ../iniciar_sesion.php');
            exit;
        }

    } catch (PDOException $exception) {
        $_SESSION['error'] = "Error interno del sistema: " . $exception->getMessage();
        header('Location: ../iniciar_sesion.php');
        exit;
    }
}
?>
