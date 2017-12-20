<?php
/**
 * Created by PhpStorm.
 * User: mparkhomenko
 * Date: 19.12.2017
 * Time: 9:32
 */

namespace app\modules\pages\controllers;


use app\controllers\AppController;
use app\modules\pages\models\Page;

use Yii;

/**
 * Class ListController
 * @package app\modules\pages\controllers
 */
class ListController extends AppController
{
    /**
     * @return string
     */
    public function actionIndex(){
        $list = Page::find()->with('pages')->all();
        return $this->render('index', compact('list'));
    }

    /**
     * @return string
     */
    public function actionArticle(){
        $list= Yii::$app->request->get('article');
        return $this->render('article', ['list'=>$list]);

    }
}
