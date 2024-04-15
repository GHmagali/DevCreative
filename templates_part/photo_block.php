<?php
// Récupére l'ID de l'image mise en avant du post
$related_thumbnail_id = get_post_thumbnail_id();
$related_thumbnail_url = wp_get_attachment_image_src($related_thumbnail_id, 'full');

// Affiche l'image mise en avant du post
echo '<div class="hover-image">';
echo '<img src="' . esc_url($related_thumbnail_url[0]) . '" alt="' . esc_attr(get_the_title()) . '" />';
