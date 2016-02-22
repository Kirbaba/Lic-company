<?php
/**
 * Created by PhpStorm.
 * User: Кирилл
 * Date: 06.02.2016
 * Time: 12:48
 */

namespace lib\helpers;

class WP
{

    public static function addShortCode($name, $controller, $action){
        add_shortcode($name, function($atts) use($controller, $action){

            $params = shortcode_atts( array(
                'test' => 1
            ), $atts );

            $res = new $controller();
            return $res->$action($params);
        });
    }

    /*public static function addAdminPage($controller, $action, $data){

        function register_my_custom_menu_page(){
            add_menu_page(
                'custom menu title', 'custom menu', 'manage_options', 'custompage', 'my_custom_menu_page', '', 6
            );
        }

        function my_custom_menu_page(){
            echo "Код страницы.";
        }
        add_action( 'admin_menu', 'register_my_custom_menu_page' );
    }*/

}