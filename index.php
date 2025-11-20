<?php
session_start();
include 'includes/header.php';
?>

<main>
    <section class="hero">
        <div class="contenedor">
            <h1 class="titulo-hero">Bienvenido a la guarida de Lobo's Gang</h1>
            <p class="subtitulo-hero">
                Vigila la manada, protege a los tuyos y actúa bajo la luna. <i class="fas fa-moon"></i>
            </p>
        </div>
    </section>

    <!-- Sección De Características -->
    <section class="caracteristicas">
        <div class="contenedor">
            <h2 class="texto-centro">¿Qué ofrece Lobo's Gang?</h2>
            <div class="grid-caracteristicas">
                <div class="tarjeta-caracteristica">
                    <div class="icono-caracteristica">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="titulo-caracteristica">Protección de la manada</h3>
                    <p class="texto-caracteristica">
                        Defensa y control de accesos para mantener segura a toda la manada.
                    </p>
                </div>

                <div class="tarjeta-caracteristica">
                    <div class="icono-caracteristica">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3 class="titulo-caracteristica">Agilidad de la manada</h3>
                    <p class="texto-caracteristica">
                        Respuestas rápidas y eficiencia para que la manada siempre se mueva con sigilo.
                    </p>
                </div>

                <div class="tarjeta-caracteristica">
                    <div class="icono-caracteristica">
                        <i class="fas fa-paw"></i>
                    </div>
                    <h3 class="titulo-caracteristica">Comunicación en la manada</h3>
                    <p class="texto-caracteristica">
                        Una interfaz clara para coordinar y mantener el orden dentro de la manada.
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
