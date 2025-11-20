<?php
session_start();
include 'includes/header.php';
?>

<div class="contenedor-formulario">
    <div class="tarjeta-formulario">
        <h2 class="titulo-formulario">Crear Cuenta - Lobo's Gang</h2>
        
        <?php if(isset($_SESSION['error'])): ?>
            <div class="alerta alerta-error">
                <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
            </div>
        <?php endif; ?>
        
        <form action="php/crear.php" method="POST">
            <div class="grupo-formulario">
                <label class="etiqueta-formulario">Nombre completo</label>
                <input type="text" class="entrada-formulario" name="nombre_completo" required>
            </div>

            <div class="grupo-formulario">
                <label class="etiqueta-formulario">Correo electrónico</label>
                <input type="email" class="entrada-formulario" name="email" required>
            </div>

            <div class="grupo-formulario">
                <label class="etiqueta-formulario">Contraseña</label>
                <input type="password" class="entrada-formulario" name="contrasena" required>
            </div>

            <button type="submit" class="boton-formulario">Registrar cuenta</button>
        </form>
        
        <div class="pie-formulario">
            ¿Ya formas parte de la manada? 
            <a href="iniciar_sesion.php" class="enlace-formulario">Inicia sesión</a>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
