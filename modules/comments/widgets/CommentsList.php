<?php

/**
 * Created by PhpStorm.
 * User: mparkhomenko
 * Date: 16.01.2018
 * Time: 11:16
 */

use app\modules\comments\models\Comment;
use yii\base\Widget;

class CommentsList extends Widget
{

    function run()
    {
        $model = Comment::find()->all();
        return $this->render('_list', ['model'=>$model]);
    }
}