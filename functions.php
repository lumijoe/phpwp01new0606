<?php
/**
 * kojotrial_newtheme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package kojotrial_newtheme
 */


/*****************************
 * ファイルの読み込み
 ****************************/
// 読み込みたいファイルを追加
function add_files() {
    wp_enqueue_style('main-style', get_stylesheet_uri('/style.css'));

    // contact.phpだけにcontact.cssを読み込ませる
    if (is_page_template('contact.php')) {
        wp_enqueue_style('contact-style', get_template_directory_uri() . '/contact.css');
    }

    // js/script.jsを読み込ませる
    wp_enqueue_script('main-script', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true);
}
// 追加したファイルを呼び出す
add_action('wp_enqueue_scripts', 'add_files');


