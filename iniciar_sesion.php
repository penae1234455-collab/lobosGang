<?php
session_start();
include 'includes/header.php';
?>

<div class="contenedor-formulario">
    <div class="tarjeta-formulario">
        <h2 class="titulo-formulario">Iniciar Sesión - Lobo's Gang</h2>

        <?php if(isset($_SESSION['error'])): ?>
            <div class="alerta alerta-error">
                <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
            </div>
        <?php endif; ?>
        
        <form action="php/iniciar.php" method="POST">
            <div class="grupo-formulario">
                <label class="etiqueta-formulario">Correo electrónico</label>
                <input type="email" class="entrada-formulario" name="email" required>
            </div>

            <div class="grupo-formulario">
                <label class="etiqueta-formulario">Contraseña</label>
                <input type="password" class="entrada-formulario" name="contrasena" required>
            </div>

            <button type="submit" class="boton-formulario">Acceder</button>
        </form>

        <div class="pie-formulario">
            ¿No tienes una cuenta?  
            <a href="crear_cuenta.php" class="enlace-formulario">Crear cuenta</a>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
