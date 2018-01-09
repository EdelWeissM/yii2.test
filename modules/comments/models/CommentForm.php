<?php
/**
 * Created by PhpStorm.
 * User: mparkhomenko
 * Date: 03.01.2018
 * Time: 16:42
 */

namespace app\modules\comments\models;


use yii\gii\Module;

class CommentForm extends Module
{
    public $name;
    public $text;

    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'text' => 'Текст коментария',
        ];
    }

    public function rules(){
        return [
            [ ['name', 'text'], 'required' ],
        ];
    }
}