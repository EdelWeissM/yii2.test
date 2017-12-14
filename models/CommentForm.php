<?php
/**
 * Created by PhpStorm.
 * User: mparkhomenko
 * Date: 07.12.2017
 * Time: 13:14
 */

namespace app\models;


use yii\base\Model;

class CommentForm extends Model
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