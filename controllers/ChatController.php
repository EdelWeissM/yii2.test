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

        /*if( Yii::$app->getRequest()->isPost ){
            $model->load( Yii::$app->getRequest()->post() );
            return $this->render('test', ['model'=>$model]);
        }
        return $this->render('test', ['model'=>$model]);*/

        if( Yii::$app->getRequest()->isPost ){
            if ($model->save()){
                return $this->refresh();
            }
        }
        return $this->render('test', ['model'=>$model]);
    }
}
