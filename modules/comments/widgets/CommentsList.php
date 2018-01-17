<?php

/**
 * Created by PhpStorm.
 * User: mparkhomenko
 * Date: 16.01.2018
 * Time: 11:16
 */
class CommentsList extends \yii\base\Widget
{

    function run()
    {
        return $this->render('_list');
    }
}