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
        $model = new Comment();

        if( $model->load( Yii::$app->getRequest()->post() )) {
            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Данные приняты');
                return $this->refresh();
            } else {
                Yii::$app->session->setFlash('error', 'Ошибка');
            }
        }

        return $this->render('test', ['model'=>$model]);
    }
}