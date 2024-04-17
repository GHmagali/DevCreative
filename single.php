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
        <section class="single_img">
            <?php
            $image = get_field('illustration');
            if (!empty($image)) : ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
        </section>
        <section class="single_content">
            <div class="single_title">
                <!-- Affiche le titre de la publication -->
                <h4 class="gradient"><?php the_title(); ?></h4>
                <p>Voir le site</p>
            </div>
            <div class="single_info">
                <ul>
                    <li>
                        <?php
                        $presentation = get_field('presentation');
                        if ($presentation) {
                            echo '<p>' . $presentation . '</p>';
                        }
                        ?>
                    </li>
                    <li>
                        <p class="langages">
                            <!-- Affiche les langages -->
                            <?php the_field('langages'); ?>
                        </p>
                    </li>
                </ul>
            </div>
        </section>
    </article>

<?php endwhile;
get_footer();
