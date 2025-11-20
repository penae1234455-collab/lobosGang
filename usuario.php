<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: iniciar_sesion.php');
    exit;
}

include 'includes/header.php';
?>

<div class="contenedor" style="display: flex; justify-content: center; align-items: center; min-height: 80vh; padding: 2rem 0;">
    <div class="tarjeta-formulario" style="margin: 0 auto;">
        <h2 class="titulo-formulario">¡Bienvenido a la manada, <?php echo htmlspecialchars($_SESSION['user_name']); ?>!</h2>
        
        <p style="text-align: center; color: var(--azul-gris); margin-bottom: 1.5rem;">
            Has ingresado correctamente al territorio de Lobo's Gang.
        </p>

        <div style="background-color: var(--gris-claro); padding: 1rem; border-radius: 6px; margin-bottom: 1.5rem;">
            <h3 style="color: var(--gris); margin-bottom: 0.5rem; text-align: center;">
                Datos de tu perfil:
            </h3>

            <p style="text-align: center;">
                <strong>Nombre del lobo:</strong> <?php echo htmlspecialchars($_SESSION['user_name']); ?>
            </p>

            <p style="text-align: center;">
                <strong>Correo de contacto:</strong> <?php echo htmlspecialchars($_SESSION['user_email']); ?>
            </p>

            <p style="text-align: center;">
                <strong>ID en la manada:</strong> <?php echo $_SESSION['user_id']; ?>
            </p>
        </div>

        
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
