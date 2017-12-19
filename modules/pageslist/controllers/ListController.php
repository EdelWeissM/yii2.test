<?php
/**
 * Created by PhpStorm.
 * User: mparkhomenko
 * Date: 19.12.2017
 * Time: 9:32
 */

namespace app\modules\pageslist\controllers;

use Yii;
use app\controllers\AppController;
use app\models\Page;
use yii\web\HttpException;

class ListController extends AppController
{
    public function actionIndex(){
        $list = Page::find()->with('pages')->all();
        return $this->render('index', compact('list'));
    }

    /*public function actionPage(){
        $id = \Yii::$app->request->get('id');
        $list = Page::findOne($id);
        if(empty($list)) throw new HttpException(404, 'Такой страници нет...');
        return $this->render('page', compact('list'));
    }*/
}
