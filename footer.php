<footer class="footer">
    <?php $front_id = get_option('page_on_front'); ?>
    <div class="footer__container">
        <div class="footer__body">
            <div class="footer__logo header-logo__wrapper" data-da=".footer__action-inner,425">
                <?php the_custom_logo(); ?>
            </div>
            <div class="footer__nav">
                <?php if(pll_current_language() == 'uk'){
                    wp_nav_menu( array(
                        'menu'              => 'menu'));}
                if(pll_current_language() == 'ru'){
                    wp_nav_menu( array(
                        'menu'              => 'menu_ru'));}
                ?>

            </div>
            <div class="footer__action-inner">

                <div class="footer__action-phone phone-action">
                    <img src="<?php the_field('Contact_phone_image', $front_id); ?>" alt="phone icon" />
                    <div class="phone-action__body">
                        <div class="phone-action__label"> <?php the_field('tel_label', $front_id); ?></div>
                        <a href="tel:<?php the_field('enter_number_link', $front_id); ?>" class="phone-action__number"
                        ><?php the_field('enter_number_telephone', $front_id); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h4 class="footer__subtitle">
        <?php the_field('footer_subtitle', $front_id); ?>
    </h4>
</footer>

</div>
<!-- Подключаем файл JS скриптов -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/swiper.js"></script>
</body>
</html>