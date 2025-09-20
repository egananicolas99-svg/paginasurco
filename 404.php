<?php get_header(); ?>

<main class="page-404">
    <div class="error-content">
        <h1 class="error-title">Página no encontrada</h1>
        
        <p class="error-message">
            Lo sentimos, la página que buscas no existe o ha sido movida.
        </p>
        
        <div class="error-actions">
            <a href="<?php echo home_url(); ?>" class="btn btn-primary">
                Volver al inicio
            </a>
        </div>
    </div>
</main>

<?php get_footer(); ?>

