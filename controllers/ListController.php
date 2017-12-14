<?php
/**
 * Created by PhpStorm.
 * User: mparkhomenko
 * Date: 13.12.2017
 * Time: 9:45
 */

namespace app\controllers;


use app\models\Page;

class ListController extends AppController
{
    public function actionIndex(){
        $lists = Page::find()->all();
        return $this->render('index', compact('lists'));
    }

}