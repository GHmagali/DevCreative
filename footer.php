<?php
// Modale de contact
get_template_part('templates_part/modale');
wp_footer();
// Menu du footer
wp_nav_menu(array(
    'theme_location' => 'footer_menu',
    'menu_class' => 'menu-footer',
));
?>

</body>

</html>