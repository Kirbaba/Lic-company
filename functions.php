<?php

define('TM_DIR', get_template_directory(__FILE__));
define('TM_URL', get_template_directory_uri(__FILE__));

use lib\helpers\Cookie;
use lib\helpers\Debug;
use lib\helpers\Mailer;
use lib\helpers\WP;


/*Подключаем Framework*/
define('ROOT_DIR', get_template_directory(__FILE__));
define('DOP_DIR', '');
define('DIR', ROOT_DIR . DOP_DIR);

include "lib/init.php";
$app->routing->start();
/*Подключили Framework*/

WP::addShortCode('test', 'Main', 'actionIndex');

function add_style(){
    wp_enqueue_style( 'my-bootstrap-extension', get_template_directory_uri() . '/css/bootstrap.css', array(), '1');

    wp_enqueue_style( 'my-styles', get_template_directory_uri() . '/css/style.css', array('my-bootstrap-extension'), '1');
   
    wp_enqueue_style( 'swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.2.7/css/swiper.min.css', array(), '1');
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/css/slick.css', array('my-bootstrap-extension'), '1');
    wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/css/slick-theme.css', array('my-bootstrap-extension'), '1');
    wp_enqueue_style( 'my-sass', get_template_directory_uri() . '/sass/style.css', array('my-bootstrap-extension'), '1');
    wp_enqueue_style( 'fotorama', get_template_directory_uri() . '/css/fotorama.css', array('my-bootstrap-extension'), '1'); 
   
}

function add_script(){
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-2.1.3.min.js', array(), '1');
    wp_enqueue_script( 'jq', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js', array(), '1');
    wp_enqueue_script( 'my-bootstrap-extension', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1');
    wp_enqueue_script( 'swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.2.7/js/swiper.min.js', array(), '1',1);
    wp_enqueue_script( 'swiper-jq', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.2.7/js/swiper.jquery.js', array(), '1',1);
    wp_enqueue_script( 'yndex-map', 'http://api-maps.yandex.ru/2.1/?lang=ru_RU', array(), '1');
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.min.js', array(), '1', 1);
    wp_enqueue_script( 'my-script', get_template_directory_uri() . '/js/script.min.js', array(), '1',1);
    wp_enqueue_script( 'my-new', get_template_directory_uri() . '/js/new.min.js', array(), '1',1);
    wp_enqueue_script( 'fotorama-js', get_template_directory_uri() . '/js/fotorama.js', array(), '1');
     wp_localize_script( 'my-script', 'myajax',
    array(
        'url' => get_template_directory_uri().'/img/',
        'act' => admin_url('admin-ajax.php')
    ));
}

function add_admin_script(){
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-2.1.3.min.js', array(), '1');
    wp_enqueue_script('admin',get_template_directory_uri() . '/js/admin.min.js', array(), '1');
    wp_enqueue_style( 'my-bootstrap-extension-admin', get_template_directory_uri() . '/css/bootstrap.css', array(), '1');
    wp_enqueue_script( 'my-bootstrap-extension', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1');
    wp_enqueue_style( 'my-style-admin', get_template_directory_uri() . '/css/admin.css', array(), '1');
}

add_action('admin_enqueue_scripts', 'add_admin_script');
add_action( 'wp_enqueue_scripts', 'add_style' );
add_action( 'wp_enqueue_scripts', 'add_script' );

function prn($content) {
    echo '<pre style="background: lightgray; border: 1px solid black; padding: 2px">';
    print_r ( $content );
    echo '</pre>';
}

function my_pagenavi() {
    global $wp_query;

    $big = 999999999; // уникальное число для замены

    $args = array(
        'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) )
    ,'format' => ''
    ,'current' => max( 1, get_query_var('paged') )
    ,'total' => $wp_query->max_num_pages
    );

    $result = paginate_links( $args );

    // удаляем добавку к пагинации для первой страницы
    $result = str_replace( '/page/1/', '', $result );

    echo $result;
}

function excerpt_readmore($more) {
    return '... <br><a href="'. get_permalink($post->ID) . '" class="readmore">' . 'Читать далее' . '</a>';
}
add_filter('excerpt_more', 'excerpt_readmore');


if ( function_exists( 'add_theme_support' ) )
    add_theme_support( 'post-thumbnails' );

// AJAX ACTION
add_action('wp_ajax_sendQ', 'sendQ');
add_action('wp_ajax_nopriv_sendQ', 'sendQ');

function sendQ(){
    $tpl = new Tpl();
    $tpl->send_mails_q($_POST['name'], $_POST['text'], $_POST['email']);
    wp_die();
}

/*----------------------------------------------— НАСТРОЙКИ ТЕМЫ —--------------------------------------------------*/
add_action('customize_register', function($customizer) {
    /*Меню настройки контактов*/
    $customizer->add_section(
        'contacts_section',
        array(
            'title' => 'Настройки контактов',
            'description' => 'Контакты',
            'priority' => 35,
        )
    );

    $customizer->add_setting(
        'mail_textbox',
        array('default' => '7345003@mail.ru')
    );

    $customizer->add_control(
        'mail_textbox',
        array(
            'label' => 'Почта',
            'section' => 'contacts_section',
            'type' => 'text',
        )
    );

    $customizer->add_setting(
        'phone_textbox',
        array('default' => '8 (495) 734-50-03')
    );

    $customizer->add_control(
        'phone_textbox',
        array(
            'label' => 'Телефон',
            'section' => 'contacts_section',
            'type' => 'text',
        )
    );
});
/*--------------------------------------------— КОНЕЦ НАСТРОЕК ТЕМЫ —-----------------------------------------------*/


/*----------------------------------------------— REVIEWS —---------------------------------------------------------*/

add_action('init', 'myCustomInitReviews');

function myCustomInitReviews()
{
    $labels = array(
        'name' => 'Отзывы', // Основное название типа записи
        'singular_name' => 'Отзывы', // отдельное название записи типа Book
        'add_new' => 'Добавить отзыв',
        'add_new_item' => 'Добавить новый отзыв',
        'edit_item' => 'Редактировать отзыв',
        'new_item' => 'Новый отзыв',
        'view_item' => 'Посмотреть отзыв',
        'search_items' => 'Найти отзыв',
        'not_found' => 'Отзывов не найдено',
        'not_found_in_trash' => 'В корзине отзывов не найдено',
        'parent_item_colon' => '',
        'menu_name' => 'Отзывы'

    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'editor','thumbnail')
    );
    register_post_type('reviews', $args);
}



function reviewShortcode()
{
    $args = array(
        'post_type' => 'reviews',
        'post_status' => 'publish',
        'posts_per_page' => -1
    );

    $my_query = null;
    $my_query = new WP_Query($args);

    $tpl = new Tpl();
    return $tpl->reviews($my_query);

}

add_shortcode('reviews', 'reviewShortcode');

/*---------------------------------------------— END REVIEWS —------------------------------------------------------*/

/*----------------------------------------------— VIDEO REVIEWS —---------------------------------------------------------*/

add_action('init', 'myCustomInitVideoReviews');

function myCustomInitVideoReviews()
{
    $labels = array(
        'name' => 'Видео отзывы', // Основное название типа записи
        'singular_name' => 'Видео отзывы', // отдельное название записи типа Book
        'add_new' => 'Добавить видео отзыв',
        'add_new_item' => 'Добавить видео новый отзыв',
        'edit_item' => 'Редактировать видео отзыв',
        'new_item' => 'Новый видео отзыв',
        'view_item' => 'Посмотреть видео отзыв',
        'search_items' => 'Найти видео отзыв',
        'not_found' => 'Отзывов не найдено',
        'not_found_in_trash' => 'В корзине отзывов не найдено',
        'parent_item_colon' => '',
        'menu_name' => 'Видео отзывы'

    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title')
    );
    register_post_type('video-reviews', $args);
}


function videoReviewShortcode()
{
    $args = array(
        'post_type' => 'video-reviews',
        'post_status' => 'publish',
        'posts_per_page' => -1
    );

    $my_query = null;
    $my_query = new WP_Query($args);

    $tpl = new Tpl();
    return $tpl->video_reviews($my_query);

}

add_shortcode('video-reviews', 'videoReviewShortcode');

/*---------------------------------------------— END VIDEO REVIEWS —------------------------------------------------------*/


/*---------------------------------------------— Товары —------------------------------------------------------*/

add_action('init', 'myCustomInitProduct');

function myCustomInitProduct()
{
    $labels = array(
        'name' => 'Продукция', // Основное название типа записи
        'singular_name' => 'Продукт', // отдельное название записи типа Book
        'add_new' => 'Добавить продукт',
        'add_new_item' => 'Добавить новый продукт',
        'edit_item' => 'Редактировать продукт',
        'new_item' => 'Новый продукт',
        'view_item' => 'Посмотреть продукт',
        'search_items' => 'Найти продукт',
        'not_found' => 'Продуктов не найдено',
        'not_found_in_trash' => 'В корзине продуктов не найдено',
        'parent_item_colon' => '',
        'menu_name' => 'Продукция'

    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'thumbnail', 'editor')
    );
    register_post_type('product', $args);
}


add_action('save_post', 'myExtraFieldsUpdate', 10, 1);

/* Сохраняем данные, при сохранении поста */
function myExtraFieldsUpdate($post_id)
{
    if (!isset($_POST['extra'])) return false;
    foreach ($_POST['extra'] as $key => $value) {
        if (empty($value)) {
            delete_post_meta($post_id, $key); // удаляем поле если значение пустое
            continue;
        }

        update_post_meta($post_id, $key, $value); // add_post_meta() работает автоматически
    }
    return $post_id;
}

function extraFieldsProductsSubtitle($post)
{
    ?>
    <p>
        <span>Объем: </span>
        <input type="text" name='extra[size]' value="<?php echo get_post_meta($post->ID, "size", 1); ?>">
    </p>
    <?php
}

function extraFieldsProductsPrice($post)
{
    ?>
    <p>
        <span>Цена: </span>
        <input id="addPrice" type="text" name='extra[price]' value="<?php echo get_post_meta($post->ID, "price", 1); ?>">
        (руб.) <small>Только цифры</small>
    </p>
    <?php
}

function extraFieldsProductsFormat($post)
{
    ?>
    <p>
        <span>Формат: </span>
        <input type="text" name='extra[format]' value="<?php echo get_post_meta($post->ID, "format", 1); ?>">
    </p>
    <?php
}

function extraFieldsProductsContainer($post)
{
    ?>
    <p>
        <span>Тара: </span>
        <input type="text" name='extra[container]' value="<?php echo get_post_meta($post->ID, "container", 1); ?>">
    </p>
    <?php
}

function myExtraFieldsProducts()
{
    add_meta_box('extra_price', 'Цена', 'extraFieldsProductsPrice', 'product', 'normal', 'high');
    add_meta_box('extra_format', 'Формат', 'extraFieldsProductsFormat', 'product', 'normal', 'high');
    add_meta_box('extra_container', 'Тара', 'extraFieldsProductsContainer', 'product', 'normal', 'high');
    add_meta_box('extra_size', 'Объем', 'extraFieldsProductsSubtitle', 'product', 'normal', 'high');
}

add_action('add_meta_boxes', 'myExtraFieldsProducts', 1);


function add_menu_taxonomies() {

    register_taxonomy('menu', 'product', array(
        'hierarchical' => true,
        'labels' => array(
            'name' => _x( 'Категории товаров', 'taxonomy general name' ),
            'singular_name' => _x( 'Категория товаров', 'taxonomy singular name' ),
            'search_items' => __( 'Поиск категорий' ),
            'all_items' => __( 'Все категории' ),
            'parent_item' => __( 'Родитель' ),
            'parent_item_colon' => __( 'Родитель:' ),
            'edit_item' => __( 'Редактировать категорию' ),
            'update_item' => __( 'Обновить категорию' ),
            'add_new_item' => __( 'Добавить новую категорию' ),
            'new_item_name' => __( 'Новое название категории' ),
            'menu_name' => __( 'Категории товаров' ),
        ),

// Control the slugs used for this taxonomy
        'rewrite' => array(
            'slug' => 'menu', // This controls the base slug that will display before each term
            'with_front' => false, // Don't display the category base before "/locations/"
            'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
        ),
    ));
}
add_action( 'init', 'add_menu_taxonomies', 0 );
/*---------------------------------------------— END Товары —------------------------------------------------------*/


/*---------------------------------------------— Список категорий —------------------------------------------------------*/
function categoryListShortcode()
{
    $args = array(
        'type' => 'product',
        'taxonomy'     => 'menu'
    );

    $categories = get_categories( $args );

    $tpl = new Tpl();
    return $tpl->get_category_list($categories);

}

add_shortcode('category_list', 'categoryListShortcode');
/*---------------------------------------------— END Список категорий —------------------------------------------------------*/


/*-------------------------------------------— МЕНЮ НАВИГАЦИИ —-----------------------------------------------------*/

function theme_register_nav_menu() {
    register_nav_menus( array(
        'primary' => 'Меню в шапке',

    ) );
//register_nav_menu( 'primary', 'Главное меню' );
}
add_action( 'after_setup_theme', 'theme_register_nav_menu' );


/*------------------------------------------— КОНЕЦ МЕНЮ НАВИГАЦИИ —------------------------------------------------*/

/*----------------------------------------------— Вопросы и ответы —---------------------------------------------------------*/

add_action('init', 'myCustomInitQuestions');

function myCustomInitQuestions()
{
    $labels = array(
        'name' => 'Вопросы и ответы', // Основное название типа записи
        'singular_name' => 'Вопрос', // отдельное название записи типа Book
        'add_new' => 'Добавить вопрос',
        'add_new_item' => 'Добавить новый вопрос',
        'edit_item' => 'Редактировать вопрос',
        'new_item' => 'Новый вопрос',
        'view_item' => 'Посмотреть вопрос',
        'search_items' => 'Найти вопрос',
        'not_found' => 'Вопрос не найдено',
        'not_found_in_trash' => 'В корзине вопросов не найдено',
        'parent_item_colon' => '',
        'menu_name' => 'Вопросы'

    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'editor','thumbnail')
    );
    register_post_type('questions', $args);
}

function questionsShortcode()
{
    $args = array(
        'post_type' => 'questions',
        'post_status' => 'publish',
        'posts_per_page' => -1
    );

    $my_query = null;
    $my_query = new WP_Query($args);

    $tpl = new Tpl();
    return $tpl->questions($my_query);

}

add_shortcode('questions', 'questionsShortcode');

// AJAX ACTION
add_action('wp_ajax_askQ', 'askQ');
add_action('wp_ajax_nopriv_askQ', 'askQ');

function askQ(){
    $args = [
        'post_title' => $_POST['ask'],
        'post_type' => 'questions',
        'post_content' => 'Ожидает ответа',
        'post_status' => 'publish'
    ];
    wp_insert_post( $args );
    wp_die();
}

/*----------------------------------------------— КОНЕЦ Вопросы и ответы —---------------------------------------------------------*/

/*----------------------------------------------— Корзина —---------------------------------------------------------*/
// AJAX ACTION
add_action('wp_ajax_add_to_basket', 'add_to_basket');
add_action('wp_ajax_nopriv_add_to_basket', 'add_to_basket');

function add_to_basket(){
    if(Cookie::get('basket')){
        $arr = json_decode(stripslashes(Cookie::get('basket')), true, 4);
    }
    else {
        $arr = [];
    }
    $arr[$_POST['post']][] = [
        'price' => $_POST['price'],
        'count' => $_POST['count'],
        'title' => $_POST['title']
    ];
    Cookie::set('basket', json_encode($arr));
    wp_die();
}

// AJAX ACTION
add_action('wp_ajax_del_from_basket', 'del_from_basket');
add_action('wp_ajax_nopriv_del_from_basket', 'del_from_basket');

function del_from_basket(){
    $arr = json_decode(stripslashes(Cookie::get('basket')), true, 4);
    unset($arr[$_POST['post']]);
    Cookie::set('basket', json_encode($arr));
    wp_die();
}

function get_basket_price(){
    $price = 0;
    if(Cookie::get('basket')){
        $arr = json_decode(stripslashes(Cookie::get('basket')), true, 4);
        foreach($arr as $k => $v){
            foreach($v as $p){
                $price += $p['count'] * $p['price'];
            }
        }
    }
    return $price;
}
/*----------------------------------------------— КОНЕЦ Корзина —---------------------------------------------------------*/
