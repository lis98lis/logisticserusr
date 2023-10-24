<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?php the_field('meta_tags'); ?></title>
        <meta name="description" content="<?php the_field('description'); ?>"/>
        <meta name="keywords" content="Ключевики" />
        <meta name="author" content="Автор" />
        <meta   charset="<?php bloginfo('charset'); ?>">
        <link
                rel="stylesheet"
                href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
        />

        <?php wp_head(); ?>
        <?php rel_canonical(); ?>
		<?php
if (is_user_logged_in()) {
    // Вывод админ-бара
    wp_admin_bar_render();
}
?>
    </head>
    <body>
    <?php $front_id = get_option('page_on_front'); ?>
        <div class="wrapper">
            <header class="header">
                <div class="header__body">
                    <div class="header__container">

                         <?php the_custom_logo(); ?>


                        <div class="header__navigation">
                            <div class="header__menu-burger">
                                <nav class="menu-burger__body menu-body">
                                    <ul class="menu-burger__list">
                                    <?php if(pll_current_language() == 'uk'){
                                        wp_nav_menu( array(
                                            'menu'              => 'menu'));}
                                    if(pll_current_language() == 'ru'){
                                        wp_nav_menu( array(
                                            'menu'              => 'menu_ru'));}
                                    ?>
                                    <?php pll_the_languages( array( 'show_flags' => 1, 'dropdown' => 1, 'post_id' => 2) ); ?>
                                    </ul>
                                </nav>

                            </div>
                        </div>

                        <div class="header__actions">

<!--                            <div class="header__actions-lang lang-header" data-da=".menu-body,500">-->
<!--                                <div class="lang-header__items">-->
<!--                                    <div class="lang-header__item">-->
<!--                                        <div class="lang-header__spoller">-->
<!--                                            <div class="lang-header__country">-->
<!--                                                <span>UA</span>-->
<!--                                            </div>-->
<!--                                            <button type="button" class="lang-header__arrow">-->
<!--                                                <img-->
<!--                                                    src="--><?php //echo get_template_directory_uri(); ?><!--/img/icons/chevron-bottom.svg"-->
<!--                                                    alt="expand more"-->
<!--                                                />-->
<!--                                            </button>-->
<!--                                        </div>-->
<!--                                        <ul class="lang-header__list spoiler-body-lang">-->
<!--                                            <li>-->
<!--                                                <div class="lang-header__country">-->
<!--                                                    <span>RU</span>-->
<!--                                                </div>-->
<!--                                            </li>-->
<!--                                            <li>-->
<!--                                                <div class="lang-header__country">-->
<!--                                                    <span>PL</span>-->
<!--                                                </div>-->
<!--                                            </li>-->
<!--                                        </ul>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
                            <div
                                class="header__action-phone phone-action"
                                data-da=".header__container,500,2">
                                <img src="<?php the_field('Contact_phone_image', $front_id); ?>" alt="phone icon" />
                                <div class="phone-action__body">
                                    <div class="phone-action__label"> <?php the_field('name_men', $front_id); ?></div>
                                    <a href="tel:<?php the_field('enter_number_link', $front_id); ?>" class="phone-action__number"
                                        ><?php the_field('enter_number_telephone', $front_id); ?></a>
                                </div>
                            </div>
                            <div data-da=".menu-body,768,98" class="header__actions-social">
                                <a href="<?php the_field('link_viber', $front_id); ?>">
                                    <img src="<?php the_field('Viber_image', $front_id); ?>" alt="Viber" />
                                </a>
                                <a href="<?php the_field('link_telegram', $front_id); ?>">
                                    <img src="<?php the_field('Telegram_image', $front_id); ?>" alt="Telegram" />
                                </a>
                                <a href="<?php the_field('link_whatsapp', $front_id); ?>">
                                    <img src="<?php the_field('image_whatsapp', $front_id); ?>" alt="Whatsapp" />
                                </a>
                            </div>
                            <div>
                                <button
                                    type="button"
                                    class="menu-burger__icon"
                                    aria-label="menu-burger">
                                    <span></span>
                                </button>
                                <div class="menu-burger__name">Меню</div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>