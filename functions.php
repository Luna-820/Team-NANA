<?php
// テーマの基本設定
add_action('after_setup_theme', function () {
    add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
});

// CSSの読み込み
add_action('wp_enqueue_scripts', 'add_styles');
function add_styles()
{
    // Google Fonts
    wp_register_style(
        'google-fonts_style',
        'https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&family=Zen+Maru+Gothic:wght@400;700&display=swap',
        array(),
        '1.0'
    );

    // Slick (CSS)
    wp_register_style(
        'slick_style',
        'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css',
        array(),
        '1.8.1'
    );

    // Reset Style（直下にある場合はパスに注意）
    wp_register_style(
        'reset_style',
        get_template_directory_uri() . '/reset.css',
        array(),
        '1.0'
    );

    // Main Style（依存関係に slick_style を追加）
    wp_enqueue_style(
        'main_style',
        get_template_directory_uri() . '/main.css',
        array('reset_style', 'google-fonts_style', 'slick_style'),
        '1.0'
    );
}

// JSの読み込み
add_action('wp_enqueue_scripts', 'add_scripts');
function add_scripts()
{
    // デフォルトのjQueryを解除
    wp_deregister_script('jquery');

    // 新しいjQueryを登録
    wp_register_script(
        'jquery_script',
        'https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js',
        array(),
        '3.7.1',
        true
    );

    // Slick (JS)
    wp_register_script(
        'slick_script',
        'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js',
        array('jquery_script'),
        '1.8.1',
        true
    );
    
    // メインスクリプト（ハンドル名は一意に）
    wp_enqueue_script(
        'main_script',
        get_template_directory_uri() . '/main.js',
        array('jquery_script', 'slick_script'),
        '1.0',
        true
    );

    wp_localize_script('main_script', 'wp_options', array(
        'template_dir' => get_template_directory_uri(), // テーマのURLを渡す
    ));
}

/**
 * body_classにページのスラッグ名（URL名）を追加する
 */
function add_page_slug_to_body_class($classes)
{
    if (is_page()) {
        global $post;
        $classes[] = 'page-' . $post->post_name;
    }
    return $classes;
}
add_filter('body_class', 'add_page_slug_to_body_class');
