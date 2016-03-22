<?php
/**
 * Created by PhpStorm.
 * User: apuc0
 * Date: 11.03.2016
 * Time: 10:09
 */

namespace models;

/**
* Модель для работы с таблицей "orders"
*
* @property integer $id
* @property string $name
* @property string $email
* @property string $phone
* @property string $address
* @property string $products
* @property integer $dt_add
* @property integer $confirm
* @property integer $number
* @property integer $sum

*/

use lib\Model;

class Orders extends Model
{
    /**
     * @inheritdoc
     */
    public function table_name(){
        return 'orders';
    }

    /**
     * @inheritdoc
     */
    public function fields(){
        return [
            'name',
            'email',
            'phone',
            'address',
            'products',
            'dt_add',
            'confirm',
            'number',
            'sum',
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules(){
        return [
            [['name', 'email', 'dt_add', 'confirm', 'number'], 'required'],
            [['dt_add', 'confirm', 'number', 'sum'], 'integer'],
            [['name', 'email', 'phone', 'address', 'products'], 'string']
        ];
    }
}