<?php
/**
 * Created by PhpStorm.
 * User: Konstantin
 * Date: 06.11.2016
 * Time: 21:41
 */

namespace app\models;

use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
    public static function tableName()
    {
        return 'categories'; // TODO: Change the autogenerated stub
    }

    public  function getProducts() {
        return $this->hasMany(Product::className(), []);
    }
}