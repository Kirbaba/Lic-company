<?php

define('TM_DIR', get_template_directory(__FILE__));
define('TM_URL', get_template_directory_uri(__FILE__));

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
    wp_enqueue_script('admin',get_template_directory_uri() . '/js/admin.js', array(), '1');
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
    $mail = new Mailer();
    $mail->to = $_POST['email'];
    $mail->subject = "Ответ с сайта";
    $mail->message = $tpl->send_q_msg($_POST['name'], $_POST['text']);
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



