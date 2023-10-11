<?php
function files() {
  	wp_enqueue_style( 'style', get_stylesheet_uri() );
	
} 

function add_admin_bar_to_top() {
    // Выводим админ-панель наверху страницы
    if (is_user_logged_in()) {
        wp_admin_bar_render();
    }
}
add_action('wp_body_open', 'add_admin_bar_to_top');
add_action( 'wp_enqueue_scripts', 'files' );

add_theme_support('menus');
add_theme_support('elementor');
add_theme_support('custom-logo');

add_action('init', 'polylang_strings' );

function polylang_strings() {
	if( ! function_exists( 'pll_register_string' ) ) {
		return;
	}
 	
	pll_register_string(
		'uslugi', // название строки
		'Послуги', // сама строка
		'Главная', // категория для удобства
		false // будут ли тут переносы строк в тексте или нет
	);
}

