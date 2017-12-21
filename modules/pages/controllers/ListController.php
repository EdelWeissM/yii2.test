<?php
/**
 * Created by PhpStorm.
 * User: mparkhomenko
 * Date: 19.12.2017
 * Time: 9:32
 */

/**
 * @author mparkhomenk
 * @version 1.0
 */

namespace app\modules\pages\controllers;

use app\controllers\AppController;
use app\modules\pages\models\Page;
use Yii;

/**
 * * Class ListController work with view files
 */
class ListController extends AppController
{
    /**
     * * Action for view "index"
     * @return string
     */
    public function actionIndex()
    {
        $list = Page::find()->with('pages')->all();
        return $this->render('index', compact('list'));
    }

    /**
     * * Action for view "article"
     * @return string
     */
    public function actionArticle()
    {
        $list = Yii::$app->request->get('article');
        return $this->render('article', ['list' => $list]);
    }
}
