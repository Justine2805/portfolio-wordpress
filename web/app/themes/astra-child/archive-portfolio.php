<?php
// Archive Portfolio Template

get_header(); ?>

<div class="portfolio-archive">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <div class="portfolio-item">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="portfolio-thumbnail">
                        <?php the_post_thumbnail('medium'); ?>
                    </div>
                <?php endif; ?>

                <h2><?php the_title(); ?></h2>
                <p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>">Voir la réalisation</a>
            </div>
        <?php endwhile;
    else :
        echo '<p>Aucune réalisation trouvée.</p>';
    endif;
    ?>
</div>

<?php get_footer(); ?>
