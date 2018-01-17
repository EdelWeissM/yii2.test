<?php

/**
 * Created by PhpStorm.
 * User: mparkhomenko
 * Date: 03.01.2018
 * Time: 11:58
 */

use yii\base\Widget;

class CommentForm extends Widget
{
    public function run()
    {
        return $this->render('_form');
    }

}