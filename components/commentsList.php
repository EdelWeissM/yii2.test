<?php
/**
 * Created by PhpStorm.
 * User: mparkhomenko
 * Date: 16.01.2018
 * Time: 10:53
 */

namespace app\components;

use app\models\Comment;
use yii\base\Widget;

class commentsList extends Widget
{
    function run()
    {
        $model = Comment::find()->all();
        return $this->render('comments-list', ['model'=>$model]);
    }

}