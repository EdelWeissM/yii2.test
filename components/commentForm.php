<?php
/**
 * Created by PhpStorm.
 * User: mparkhomenko
 * Date: 15.01.2018
 * Time: 12:11
 */

namespace app\components;

use Yii;
use app\models\Comment;
use yii\base\Widget;

class commentForm extends Widget
{
    function run()
    {
        $model = new Comment();

        if( $model->load( Yii::$app->request->isAjax )) {
            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Данные приняты');
                //return $this->refresh();
            } else {
              Yii::$app->session->setFlash('error', 'Ошибка');
            }
        }

        return $this->render('comment-form', ['model'=>$model]);
    }
}