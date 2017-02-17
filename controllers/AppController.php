<?php
/**
 * Created by PhpStorm.
 * User: Konstantin
 * Date: 03.11.2016
 * Time: 21:43
 */

namespace app\controllers;

use yii\base\Controller;

class AppController extends Controller
{
    public function debug($arr) {
        echo '<pre>' .print_r($arr, true). '</pre>';
    }

}

