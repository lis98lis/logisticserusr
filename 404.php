<?php
/*
Template Name:404-not-found
*/
?>
<?php get_header(); ?>
    <main class="main__not-found">
        <section class="not-found">
            <a href="<?php the_permalink(2); ?>" class="not-found__container">
                <h4 class="not-found__title">404</h4>
<!--                <p class="not-found__subtitle">Такой страницы нет</p>-->
<!--                <p class="not-found__text">Но есть много других полезных страниц</p>-->
            </a>
        </section>
    </main>
<?php get_footer(); ?>