<footer class="footer">
    <div class="footer__container">
        <div class="footer__body">
            <a class="footer__logo" href="#" data-da=".footer__action-inner,425">
                <img src="<?php echo get_template_directory_uri(); ?>/img/footer/logo.svg" alt="логотип підвалу"/>
            </a>
            <div class="footer__nav">
                <?php if(pll_current_language() == 'uk'){
                    wp_nav_menu( array(
                        'menu'              => 'menu'));}
                if(pll_current_language() == 'ru'){
                    wp_nav_menu( array(
                        'menu'              => 'menu_ru'));}
                ?>
<!--                <ul class="footer__list">-->
<!--                    <li class="footer__list-item">-->
<!--                        <a href="#" class="footer__list-link">Послуги</a>-->
<!--                    </li>-->
<!--                    <li class="footer__list-item">-->
<!--                        <a href="#" class="footer__list-link">Доставка з Китаю</a>-->
<!--                    </li>-->
<!--                    <li class="footer__list-item">-->
<!--                        <a href="#" class="footer__list-link"-->
<!--                        >Доставка з інших країн</a-->
<!--                        >-->
<!--                    </li>-->
<!--                    <li class="footer__list-item">-->
<!--                        <a href="#" class="footer__list-link">Про компанію</a>-->
<!--                    </li>-->
<!--                    <li class="footer__list-item">-->
<!--                        <a href="#" class="footer__list-link">Гарантії</a>-->
<!--                    </li>-->
<!--                    <li class="footer__list-item">-->
<!--                        <a href="#" class="footer__list-link">Блог</a>-->
<!--                    </li>-->
<!--                    <li class="footer__list-item">-->
<!--                        <a href="#" class="footer__list-link">Контакти</a>-->
<!--                    </li>-->
<!--                    <li class="lang-header__items">-->
<!--                        <div class="lang-header__item">-->
<!--                            <div class="lang-header__spoller">-->
<!--                                <div class="lang-header__country">-->
<!--                                    <span>UA</span>-->
<!--                                </div>-->
<!--                                <button type="button" class="lang-header__arrow">-->
<!--                                    <img-->
<!--                                            src="--><?php //echo get_template_directory_uri(); ?><!--/img/icons/chevron-bottom.svg"-->
<!--                                            alt="розгорнути більше"-->
<!--                                    />-->
<!--                                </button>-->
<!--                            </div>-->
<!--                            <ul class="lang-header__list spoiler-body-lang">-->
<!--                                <li>-->
<!--                                    <div class="lang-header__country">-->
<!--                                        <span>RU</span>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <div class="lang-header__country">-->
<!--                                        <span>PL</span>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </li>-->
<!--                </ul>-->
            </div>
            <div class="footer__action-inner">

                <div class="footer__action-phone phone-action">
                    <img src="<?php the_field('Contact_phone_image', $front_id); ?>" alt="phone icon" />
                    <div class="phone-action__body">
                        <div class="phone-action__label"> <?php the_field('name_men', $front_id); ?></div>
                        <a href="tel:<?php the_field('enter_number_link', $front_id); ?>" class="phone-action__number"
                        ><?php the_field('enter_number_telephone', $front_id); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

</div>
<!-- Подключаем файл JS скриптов -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/swiper.js"></script>
</body>
</html>