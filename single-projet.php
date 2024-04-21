<!-- /**
* The template for displaying the custom post type "projet"
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
*

*/ -->

<?php
get_header();
while (have_posts()) :
    the_post();
?>
    <section class="page-container">
        <article class="single_projet" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="single_info">
                <!-- Titre de la publication -->
                <h4 class="gradient-single"><?php the_title(); ?></h4>
                <p class="langages">
                    <!-- Affiche les langages -->
                    <?php the_field('langages'); ?>
                </p>
                <!-- Liens site et GitHub -->
                <div class="links">
                    <img class="icon-W" src=" <?= wp_get_attachment_image_src(190)[0]; ?>" alt="logo Wordpress">
                    <a class="single_site" href="<?php the_field('url_du_site'); ?>" target=" _blank" aria-label="Ouvre dans une nouvelle fenêtre">Voir le site</a>
                    <img class="icon-Git" src=" <?= wp_get_attachment_image_src(194)[0]; ?>" alt="logo Wordpress">
                    <a class="single_code" href="<?php the_field('depot_github'); ?>" target=" _blank" aria-label="Ouvre dans une nouvelle fenêtre">Voir le code</a>
                </div>
                <!-- Langages de programmation -->
                <!-- Présentation du projet -->
                <div class="presentation"><?php
                                            $presentation = get_field('presentation');
                                            if ($presentation) {
                                                echo '<p >' . $presentation . '</p>';
                                            }
                                            ?>
                </div>
            </div>
            <!-- Image du projet -->
            <div class="single_img">
                <?php
                $image = get_field('illustration');
                if (!empty($image)) : ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div>
        </article>
    </section>
<?php endwhile;
get_footer();
