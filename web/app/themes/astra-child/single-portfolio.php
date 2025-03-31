<?php get_header(); ?>

<main>
    <article>
        <h1><?php the_title(); ?></h1>

        <?php 
        // Afficher l’image mise en avant (featured image) sous le titre
        if (has_post_thumbnail()) :
            echo '<div class="featured-image">';
            the_post_thumbnail('medium'); // Taille 'medium' pour ne pas être trop grande
            echo '</div>';
        endif;
        ?>

        <?php
        // Récupération des champs ACF
        $client = get_field('client');
        $date_realisation = get_field('date_realisation');
        $lien_projet = get_field('lien_projet');
        $image_1 = get_field('image_1');
        $image_2 = get_field('image_2');
        $image_3 = get_field('image_3');
        ?>

        <p><strong>Client :</strong> <?php echo esc_html($client); ?></p>
        <p><strong>Date de réalisation :</strong> <?php echo esc_html($date_realisation); ?></p>

        <?php if ($lien_projet) : ?>
            <p><a href="<?php echo esc_url($lien_projet); ?>" target="_blank">Voir le projet</a></p>
        <?php endif; ?>

        <div class="portfolio-images">
            <?php if ($image_1) : ?>
                <img src="<?php echo esc_url($image_1['sizes']['medium']); ?>" alt="<?php echo esc_attr($image_1['alt']); ?>">
            <?php endif; ?>
            
            <?php if ($image_2) : ?>
                <img src="<?php echo esc_url($image_2['sizes']['medium']); ?>" alt="<?php echo esc_attr($image_2['alt']); ?>">
            <?php endif; ?>
            
            <?php if ($image_3) : ?>
                <img src="<?php echo esc_url($image_3['sizes']['medium']); ?>" alt="<?php echo esc_attr($image_3['alt']); ?>">
            <?php endif; ?>
        </div>

    </article>
</main>

<?php get_footer(); ?>
