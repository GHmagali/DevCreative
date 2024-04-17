<?php get_header(); ?>

<section class="page-container">
    <div id="intro">
        <h2>Bonjour je suis Magali</h2>
        <h1 class="gradient">Développeuse</h1>
        <span class="wordpress">Wordpress</span>
    </div>
</section>

<div id="projets" class="page-container">
    <h3 class="projets-title">Mes Projets</h3>
    <?php
    $args = array(
        'post_type'      => 'projet',
        'posts_per_page' => -1,
        'order' => 'ASC',
    );
    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
    ?>
            <article class="projets-content" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="project-description">
                    <!-- Affiche le titre de la publication -->
                    <h4><?php the_title(); ?></h4>
                    <!-- Affiche la description -->
                    <p class="projet-text"><?php
                                            $description = get_field('Description');
                                            if ($description) {
                                                echo '<p class="projet-text">' . $description . '</p>';
                                            }
                                            ?></p>
                    <p class="langages">
                        <!-- Affiche les langages -->
                        <?php the_field('langages'); ?>
                    </p>
                    <p>Voir le projet</p>
                </div>
                <div class="project-img">
                    <?php
                    // Récupère l'image à la taille 'large' et l'affiche
                    $thumbnail = get_the_post_thumbnail(get_the_ID(), 'large');
                    if ($thumbnail) {
                        echo $thumbnail;
                    }
                    ?>
                </div>
            </article>
    <?php
        }
        wp_reset_postdata();
    }
    ?>
</div>