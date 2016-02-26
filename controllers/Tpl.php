<?php
use lib\Controller;

/**
 * Created by PhpStorm.
 * User: apuc0
 * Date: 22.02.2016
 * Time: 16:49
 */
class Tpl extends Controller
{

    public function send_q_msg($name, $text){
        return $this->app->parser->renderW('msg', [
            'name' => $name,
            'text' => $text
        ], false);
    }

}