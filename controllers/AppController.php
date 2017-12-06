<?php
/**
 * Created by PhpStorm.
 * User: mparkhomenko
 * Date: 05.12.2017
 * Time: 16:00
 */

namespace app\controllers;


use yii\web\Controller;

class AppController extends Controller
{
    public function debug($arr){
        echo '<pre>' . print_r($arr, true) . '</pre>';
    }
}