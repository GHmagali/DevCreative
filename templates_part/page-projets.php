/*
Template Name: Projets
*/

<div id="projets page-container">
    <h3 class="projets-title">Projets</h3>
    <?php
    $args = array(
        'post_type'      => 'projet', // Remplacez 'votre_cpt' par le slug de votre custom post type
        'posts_per_page' => -1, // Récupère tous les posts du custom post type
        'order' => 'ASC',
    );
    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
    ?>
            <article class="cards" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="project-img">
                    <?php
                    // Récupère l'image à la taille 'medium' et l'affiche
                    $thumbnail = get_the_post_thumbnail(get_the_ID(), 'medium');
                    if ($thumbnail) {
                        echo $thumbnail;
                    }
                    ?>
                </div>

                <div class="project-description">
                    <!-- Affiche le titre de la publication -->
                    <h3><?php the_title(); ?></h3>
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
                </div>
            </article>
    <?php
        }
        wp_reset_postdata();
    }
    ?>
</div>