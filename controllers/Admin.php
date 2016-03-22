<?php
use lib\Controller;
use models\Orders;

/**
 * Created by PhpStorm.
 * User: apuc0
 * Date: 11.03.2016
 * Time: 11:28
 */
class Admin extends Controller
{

    public function get_orders(){
        $orders = new Orders();
        return $this->app->parser->renderCode('index', [
            'orders' => $orders->find()->all()
        ], false);
    }

}