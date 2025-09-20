<?php get_header(); ?>

<main class="search-results">
    <header class="search-header">
        <h1 class="search-title">
            <?php if (have_posts()) : ?>
                Resultados de búsqueda para: "<?php echo get_search_query(); ?>"
            <?php else : ?>
                Búsqueda: "<?php echo get_search_query(); ?>"
            <?php endif; ?>
        </h1>
    </header>

    <?php if (have_posts()) : ?>
        <div class="posts-grid">
            <?php while (have_posts()) : the_post(); ?>
                <article <?php post_class(); ?>>
                    <header class="entry-header">
                        <h2 class="entry-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                    </header>

                    <div class="entry-summary">
                        <?php the_excerpt(); ?>
                    </div>

                    <footer class="entry-footer">
                        <a href="<?php the_permalink(); ?>" class="read-more">Leer más</a>
                    </footer>
                </article>
            <?php endwhile; ?>
        </div>

        <div class="pagination">
            <?php the_posts_pagination(); ?>
        </div>
    <?php else : ?>
        <div class="no-results">
            <p>No se encontraron resultados para tu búsqueda.</p>
            <p>Intenta con otros términos o <a href="<?php echo home_url(); ?>">vuelve al inicio</a>.</p>
        </div>
    <?php endif; ?>
</main>

<?php get_footer(); ?>

