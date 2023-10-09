<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Название</title>
        <meta name="description" content="Опис" />
        <meta name="keywords" content="Ключевики" />
        <meta name="author" content="Автор" />
        <?php wp_head(); ?>
		<?php
if (is_user_logged_in()) {
    // Вывод админ-бара
    wp_admin_bar_render();
}
?>
    </head>
    <body>
        <div class="wrapper">
            <header class="header">
                <div class="header__body">
                    <div class="header__container">
                        <a href="/" class="header__logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/header/logo.svg" alt="logo" />
                        </a>

                        <div class="header__navigation">
                            <div class="header__menu-burger">
                                <nav class="menu-burger__body menu-body">
                                    <ul class="menu-burger__list">
                                        <li class="menu-burger__item">
                                            <a href="#" class="menu-burger__link">Головна</a>
                                        </li>
                                        <li class="menu-burger__item">
                                            <a href="#" class="menu-burger__link">Послуги</a>
                                        </li>
                                        <li class="menu-burger__item">
                                            <a href="#" class="menu-burger__link"
                                                >Доставка з Китаю</a
                                            >
                                        </li>
                                        <li class="menu-burger__item">
                                            <a href="#" class="menu-burger__link"
                                                >Доставка з іншої країни</a
                                            >
                                        </li>
                                        <li class="menu-burger__item">
                                            <a href="#" class="menu-burger__link">Про компанію</a>
                                        </li>
                                        <li class="menu-burger__item">
                                            <a href="#" class="menu-burger__link">ГарантіЇ</a>
                                        </li>
                                        <li class="menu-burger__item">
                                            <a href="#" class="menu-burger__link">Блог</a>
                                        </li>
                                        <li class="menu-burger__item">
                                            <a href="#" class="menu-burger__link">Контакти</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <div class="header__actions">
                            <div class="header__actions-lang lang-header" data-da=".menu-body,500">
                                <div class="lang-header__items">
                                    <div class="lang-header__item">
                                        <div class="lang-header__spoller">
                                            <div class="lang-header__country">
                                                <span>UA</span>
                                            </div>
                                            <button type="button" class="lang-header__arrow">
                                                <img
                                                    src="<?php echo get_template_directory_uri(); ?>/img/icons/chevron-bottom.svg"
                                                    alt="expand more"
                                                />
                                            </button>
                                        </div>
                                        <ul class="lang-header__list spoiler-body-lang">
                                            <li>
                                                <div class="lang-header__country">
                                                    <span>RU</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="lang-header__country">
                                                    <span>PL</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="header__action-phone phone-action"
                                data-da=".header__container,500,2"
                            >
                                <img src="<?php echo get_template_directory_uri(); ?>/img/header/phone.svg" alt="phone icon" />
                                <div class="phone-action__body">
                                    <div class="phone-action__label">Безкоштовно</div>
                                    <a href="tel:<?php echo get_field('phone_number') ?>" class="phone-action__number"
                                        ><?php echo get_field('phone_number') ?></a
                                    >
                                </div>
                            </div>
                            <div data-da=".menu-body,768,98" class="header__actions-social">
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/header/viber.svg" alt="Viber" />
                                </a>
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/header/telegram.svg" alt="Telegram" />
                                </a>
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/header/whatsapp.svg" alt="Whatsapp" />
                                </a>
                            </div>
                            <div>
                                <button
                                    type="button"
                                    class="menu-burger__icon"
                                    aria-label="menu-burger"
                                >
                                    <span></span>
                                </button>
                                <div class="menu-burger__name">Меню</div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>