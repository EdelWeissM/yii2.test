<?php

/**
 * Created by PhpStorm.
 * User: mparkhomenko
 * Date: 03.01.2018
 * Time: 11:58
 */

use yii\base\Widget;
use app\modules\comments\models\Comment;

class CommentForm extends Widget
{
    function run()
    {
        $model = new Comment();

        if( $model->load( Yii::$app->getRequest()->post() )) {
            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Данные приняты');
                //return $this->refresh();
            } else {
                Yii::$app->session->setFlash('error', 'Ошибка');
            }
        }

        return $this->render('_form', ['model'=>$model]);
    }

}