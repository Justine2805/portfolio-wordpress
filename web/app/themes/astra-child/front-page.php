<?php
// Front-page.php - Template de la page d'accueil

get_header(); ?>

<!-- Conteneur pour les deux sections -->
<div class="home-content">

    <!-- Section de présentation de l'étudiant -->
    <div class="home-introduction">
        <h1>Bienvenue sur mon portfolio</h1>
        <p>Je suis Justine GALLET, une étudiante en BUT Informatique à Laval, actuellement en alternance dans l'entreprise Info Tec à Saint-Fort.</p>
        <p>Dans ma formation, je vois un large panel de langage allant du web (HTML, CSS, PHP, JS, Symfony,...) en passant par du Java et du Kotlin et finissant avec du SQL et NoSQL.</p>
    </div>

    <!-- Section des 3 meilleures réalisations -->
    <div class="top-three-portfolio">
        <h2>Mes 3 meilleures réalisations</h2>
        <?php
        // WP_Query pour récupérer les 3 meilleures réalisations
        $args = array(
            'post_type' => 'portfolio',
            'posts_per_page' => 3,
            'orderby' => 'date',
            'order' => 'DESC'
        );
        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post(); ?>
                <div class="portfolio-item">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="portfolio-thumbnail">
                            <?php the_post_thumbnail('medium'); ?>
                        </div>
                    <?php endif; ?>
                    <h3><?php the_title(); ?></h3>
                    <p><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>">Voir la réalisation</a>
                </div>
            <?php endwhile;
        else :
            echo '<p>Aucune réalisation trouvée.</p>';
        endif;
        wp_reset_postdata();
        ?>
    </div>

</div> <!-- Fermeture du conteneur home-content -->

<?php get_footer(); ?>
