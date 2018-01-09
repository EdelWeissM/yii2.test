<?php

/**
 * Created by PhpStorm.
 * User: mparkhomenko
 * Date: 26.12.2017
 * Time: 14:00
 */

namespace app\modules\comments\controllers;

use app\controllers\AppController;
use app\modules\comments\models\CommentsForm;
use app\modules\comments\models\Comment;
use Yii;

class CommentsController extends AppController
{
    public function actionIndex()
    {
        $model = new CommentForm();

        if( $model->load(Yii::$app->request->post()) ){
            return $this->render('index', compact('model'));
        }
        return $this->render('index', compact('model'));
    }
}