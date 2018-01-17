<?php

/**
 * Created by PhpStorm.
 * User: mparkhomenko
 * Date: 26.12.2017
 * Time: 14:00
 */

namespace app\modules\comments\controllers;

use app\controllers\AppController;
use app\modules\comments\models\Comment;
use Yii;

class CommentsController extends AppController
{
    public function actionSend(){
        $module = Yii::$app->getModule('comments');

        if(Yii::$app->user->isGuest && !$module->guestCanComment){
            return $this->redirect(Yii::$app->request->referrer?:Yii::$app->homeUrl);
        }
        $model = new Comment([
            'scenario'=>Yii::$app->user->isGuest?Comment::SCENARIO_FORM_GUEST:Comment::SCENARIO_FORM_USER
        ]);
        if($model->load(Yii::$app->request->post()) && $model->validate()){
            $model->save();
            return $this->redirect(Yii::$app->request->referrer ?: Yii::$app->homeUrl);
        }
        Yii::$app->session->setFlash('error', 'Ошибка');
        return $this->redirect(Yii::$app->request->referrer?:Yii::$app->homeUrl);
    }
}