<?php get_header(); ?>

<main class="archive-list">
    <header class="archive-header">
        <h1 class="archive-title"><?php the_archive_title(); ?></h1>
        <?php if (get_the_archive_description()) : ?>
            <div class="archive-description">
                <?php the_archive_description(); ?>
            </div>
        <?php endif; ?>
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
        <p>No hay contenido para mostrar.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>

