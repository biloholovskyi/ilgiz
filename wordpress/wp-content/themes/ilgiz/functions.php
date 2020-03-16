<?php
// подключение скриптов
add_action('wp_enqueue_scripts', 'style_them');
// подключение стилей
add_action('wp_footer', 'script_them');
// подключение меню
add_action('after_setup_theme', 'menu');

// пример создание меню
function menu() {
  // register_nav_menu('header', 'Главное меню в шапке');
  // register_nav_menu('footer', 'Меню в подвале');
  // подключаем обложку поста
  add_theme_support( 'post-thumbnails', array('post', 'gallery', 'slider') );
  // удаляем ... в кратком описание постов
  add_filter('excerpt_more', function($more) {
    return '';
  });
}

// подключение стилей
function style_them() {
  // подключение основного файла стилей
  wp_enqueue_style('style', get_stylesheet_uri());
  // подключение остальный файлов
  wp_enqueue_style('carousel', get_template_directory_uri() . '/css/owl.carousel.min.css');
  wp_enqueue_style('carousel-default', get_template_directory_uri() . '/css/owl.theme.default.min.css');
  wp_enqueue_style('main', get_template_directory_uri() . '/css/style.css'); 
}

// подключение скриптов
function script_them() {
  wp_enqueue_script('script-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js');
  wp_enqueue_script('script', get_template_directory_uri() . '/js/main.js');

  // удаление из скриптов лишних аттрибутов
  add_filter('script_loader_tag', 'codeless_remove_type_attr', 10, 2);
  function codeless_remove_type_attr($tag, $handle) {
    return preg_replace("/type=['\"]text\/(javascript|css)['\"]/", '', $tag);
  }
}

// пример создания нового типа поста
add_action( 'init', 'register_post_types' );
function register_post_types(){
  register_post_type('gallery', array(
    'label'  => null,
    'labels' => array(
      'name'               => 'Галерея', // основное название для типа записи
      'singular_name'      => 'Картина', // название для одной записи этого типа
      'add_new'            => 'Добавить картину', // для добавления новой записи
      'add_new_item'       => 'Добавление картины', // заголовка у вновь создаваемой записи в админ-панели.
      'edit_item'          => 'Редактирование картины', // для редактирования типа записи
      'new_item'           => 'Новая картина', // текст новой записи
      'view_item'          => 'Смотреть картину', // для просмотра записи этого типа.
      'search_items'       => 'Искать картину', // для поиска по этим типам записи
      'not_found'          => 'Не найдена картина', // если в результате поиска ничего не было найдено
      'not_found_in_trash' => 'Не найдена картина в корзине', // если не было найдено в корзине
      'parent_item_colon'  => '', // для родителей (у древовидных типов)
      'menu_name'          => 'Галерея', // название меню
    ),
    'description'         => '',
    'public'              => true,
    'publicly_queryable'  => true, // зависит от public
    'exclude_from_search' => true, // зависит от public
    'show_ui'             => true, // зависит от public
    'show_in_menu'        => true, // показывать ли в меню адмнки
    'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
    'show_in_nav_menus'   => true, // зависит от public
    'show_in_rest'        => null, // добавить в REST API. C WP 4.7
    'rest_base'           => null, // $post_type. C WP 4.7
    'menu_position'       => 2,
    'menu_icon'           => 'dashicons-format-gallery',
    //'capability_type'   => 'post',
    //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
    //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
    'hierarchical'        => false,
    'supports'            => array('title', 'thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    'taxonomies'          => array(),
    'has_archive'         => false,
    'rewrite'             => true,
    'query_var'           => true,
  ) );

  register_post_type('slider', array(
    'label'  => null,
    'labels' => array(
      'name'               => 'Слайдер', // основное название для типа записи
      'singular_name'      => 'фото на слайдер', // название для одной записи этого типа
      'add_new'            => 'Добавить фото на слайдер', // для добавления новой записи
      'add_new_item'       => 'Добавление фото на слайдер', // заголовка у вновь создаваемой записи в админ-панели.
      'edit_item'          => 'Редактирование фото на слайдере', // для редактирования типа записи
      'new_item'           => 'Новое фото на слайдер', // текст новой записи
      'view_item'          => 'Смотреть фото слайдера', // для просмотра записи этого типа.
      'search_items'       => 'Искать фото в слайдере', // для поиска по этим типам записи
      'not_found'          => 'Не найдиное фото в слайдере', // если в результате поиска ничего не было найдено
      'not_found_in_trash' => 'Не найдиное фото слайдера в корзине', // если не было найдено в корзине
      'parent_item_colon'  => '', // для родителей (у древовидных типов)
      'menu_name'          => 'Слайдер', // название меню
    ),
    'description'         => '',
    'public'              => true,
    'publicly_queryable'  => true, // зависит от public
    'exclude_from_search' => true, // зависит от public
    'show_ui'             => true, // зависит от public
    'show_in_menu'        => true, // показывать ли в меню адмнки
    'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
    'show_in_nav_menus'   => true, // зависит от public
    'show_in_rest'        => null, // добавить в REST API. C WP 4.7
    'rest_base'           => null, // $post_type. C WP 4.7
    'menu_position'       => 3,
    'menu_icon'           => 'dashicons-format-gallery',
    //'capability_type'   => 'post',
    //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
    //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
    'hierarchical'        => false,
    'supports'            => array('title', 'thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    'taxonomies'          => array(),
    'has_archive'         => false,
    'rewrite'             => true,
    'query_var'           => true,
  ) );

}

// скрипт для добавления svg картинок в адмнке
function cc_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );


