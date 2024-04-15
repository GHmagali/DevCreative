<?php get_header();

while (have_posts()) :
    the_post();
?>
    <section class="page-container">
        <div id="left-side">
            <h2>Bonjour je suis Magali</h2>
            <h1>Développeuse</br>Wordpress</h1>
        </div>

        <div id="right-side">
            <div class="cards">
                <img class="project-img"></img>
                <p class="project-text"></p>
            </div>
    </section>




<?php endwhile;
get_footer(); ?>