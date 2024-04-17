<?php

/**
 * The template for displaying the custom post type "projet"
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *

 */

get_header();
while (have_posts()) :
    the_post();
?>
    <article class="single_projet page-container" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <section class="single_content">
            <div class="single_title">
                <!-- Affiche le titre de la publication -->
                <h4><?php the_title(); ?></h4>
            </div>
            <div class="single_info">
                <?php
                $presentation = get_field('Presentation');
                if ($presentation) {
                    echo '<p class="projet-text">' . $presentation . '</p>';
                }
                ?>
                <p class="langages">
                    <!-- Affiche les langages -->
                    <?php the_field('langages'); ?>
                </p>
                <p>Voir le site</p>
            </div>
            <div class="single_img">
                <?php
                // Récupère l'image à la taille 'large' et l'affiche
                $thumbnail = get_the_post_thumbnail(get_the_ID(), 'large');
                if ($thumbnail) {
                    echo $thumbnail;
                }
                ?>
            </div>
        </section>
    </article>

<?php endwhile;
get_footer();
