<?php

function enable_svg_upload($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'enable_svg_upload');


function theme_enqueue_styles() {
    wp_enqueue_style( 'main-styles', get_template_directory_uri() . '/css/style.css', array(), null );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );





// function my_theme_customizer_settings($wp_customize) {
//     // Секция для полей на главной странице
//     $wp_customize->add_section('main_page_text_section', [
//         'title'    => 'Текст для главной страницы',
//         'priority' => 30,
//     ]);

//     // Поле для Заголовка
//     $wp_customize->add_setting('main_page_title', [
//         'default'   => 'Введите заголовок',
//         'transport' => 'refresh',
//     ]);
//     $wp_customize->add_control('main_page_title_control', [
//         'label'    => 'Заголовок',
//         'section'  => 'main_page_text_section',
//         'settings' => 'main_page_title',
//         'type'     => 'text',
//     ]);

//     // Поле для Подзаголовка
//     $wp_customize->add_setting('main_page_subtitle', [
//         'default'   => 'Введите подзаголовок',
//         'transport' => 'refresh',
//     ]);
//     $wp_customize->add_control('main_page_subtitle_control', [
//         'label'    => 'Подзаголовок',
//         'section'  => 'main_page_text_section',
//         'settings' => 'main_page_subtitle',
//         'type'     => 'text',
//     ]);

//     // Поле для Описания
//     $wp_customize->add_setting('main_page_description', [
//         'default'   => 'Введите описание',
//         'transport' => 'refresh',
//     ]);
//     $wp_customize->add_control('main_page_description_control', [
//         'label'    => 'Описание',
//         'section'  => 'main_page_text_section',
//         'settings' => 'main_page_description',
//         'type'     => 'textarea',
//     ]);
// 	$wp_customize->add_section('main_page_image_section', [
//         'title'    => 'Изображения для главной страницы',
//         'priority' => 30,
//     ]);

//     // Поле для загрузки главного изображения
//     $wp_customize->add_setting('main_page_image', [
//         'default'   => '',
//         'transport' => 'refresh',
//     ]);
//     $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'main_page_image_control', [
//         'label'    => 'Главное изображение',
//         'section'  => 'main_page_image_section',
//         'settings' => 'main_page_image',
//     ]));

    
// }
// add_action('customize_register', 'my_theme_customizer_settings');

// function theme_enqueue_styles() {
//     wp_enqueue_style( 'main-styles', get_template_directory_uri() . '/css/style.css', array(), null );
// }
// add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
