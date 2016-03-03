<?php
use lib\Controller;

/**
 * Created by PhpStorm.
 * User: apuc0
 * Date: 01.03.2016
 * Time: 13:13
 */
class Category extends Controller
{

    public function get_category(){
        $tax = get_queried_object();
        $myposts = get_posts(array(
                'post_type' => 'product',
                'tax_query' => array(
                    array(
                        'taxonomy' => $tax->taxonomy,
                        'field' => 'id',
                        'terms' => $tax->term_id)
                ))
        );
        $thumbArr = [];
        foreach($myposts as $post){
            $thumbArr[get_post_thumbnail_id($post->ID)][] = $post->ID;
        }
        $this->app->parser->renderCode('index', ['arr'=>$thumbArr]);
    }

}