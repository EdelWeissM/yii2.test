<?php
/**
 * Created by PhpStorm.
 * User: mparkhomenko
 * Date: 04.01.2018
 * Time: 10:27
 */

namespace app\controllers;

use Yii;
use app\models\Comment;

class ChatController extends AppController
{
    public function actionTest()
    {
        $model = new Comment();

        if( $model->load( Yii::$app->request->isAjax )) {
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
