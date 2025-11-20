<?php
session_start();
require_once __DIR__ . '/../config/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $database = new Database();
    $db = $database->getConnection();
    
    $nombre = trim($_POST['nombre_completo']);
    $email = trim($_POST['email']);
    $contrasena = $_POST['contrasena'];
    
    // Validaciones
    if (empty($nombre) || empty($email) || empty($contrasena)) {
        $_SESSION['error'] = "Todos los campos son obligatorios para unirte a la manada.";
        header('Location: ../crear_cuenta.php');
        exit;
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "El correo proporcionado no tiene un formato válido.";
        header('Location: ../crear_cuenta.php');
        exit;
    }
    
    try {
        // Verificar si el email ya existe
        $query = "SELECT id FROM usuarios WHERE email = :email";
        $stmt = $db->prepare($query);
        $stmt->bindParam(":email", $email);
        $stmt->execute();
        
        if ($stmt->rowCount() > 0) {
            $_SESSION['error'] = "Este correo ya pertenece a un miembro de la manada.";
            header('Location: ../crear_cuenta.php');
            exit;
        }
        
        // Encriptar la contraseña por si acaso
        $contrasena_hash = password_hash($contrasena, PASSWORD_DEFAULT);
        
        // Aca se inserta un nuevo usuario
        $query = "INSERT INTO usuarios (nombre_completo, email, contrasena) 
                VALUES (:nombre, :email, :contrasena)";
        $stmt = $db->prepare($query);
        $stmt->bindParam(":nombre", $nombre);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":contrasena", $contrasena_hash);
        
        if ($stmt->execute()) {
            $_SESSION['exito'] = "¡Bienvenido a la manada! Tu cuenta ha sido creada correctamente.";
            header('Location: ../iniciar_sesion.php');
        } else {
            $_SESSION['error'] = "Hubo un problema al registrar tu ingreso a Lobo’s Gang.";
            header('Location: ../crear_cuenta.php');
        }
        
    } catch(PDOException $exception) {
        $_SESSION['error'] = "Error interno del sistema: " . $exception->getMessage();
        header('Location: ../crear_cuenta.php');
    }
    
    exit;
}
?>
