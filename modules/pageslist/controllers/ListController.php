<?php
/**
 * Created by PhpStorm.
 * User: mparkhomenko
 * Date: 19.12.2017
 * Time: 9:32
 */

namespace app\modules\pageslist\controllers;


use app\controllers\AppController;
use app\modules\pageslist\models\Page;

use Yii;

/**
 * Class ListController
 * @package app\modules\pageslist\controllers
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
    public function actionPage(){
        $list= Yii::$app->request->get('article');
        return $this->render('page', ['list'=>$list]);

    }
}
