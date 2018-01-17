<?php

/**
 * Created by PhpStorm.
 * User: mparkhomenko
 * Date: 26.12.2017
 * Time: 14:04
 */

namespace app\modules\comments\models;

use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

class Comment extends ActiveRecord
{
    const SCENARIO_FORM_GUEST = 'addCommentFromGuest';
    const SCENARIO_FORM_USER = 'addCommentFromUser';

    public static function tableName()
    {
        return '{{%comments}}';
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'email' => 'E-mail',
            'content' => 'Текст сообщения',
        ];
    }

    public function scenarios()
    {
        return [
            self::SCENARIO_FORM_GUEST=>['email', 'name', 'content', 'class_name', 'identify_key'],
            self::SCENARIO_FORM_USER=>['content', 'class_name', 'identify_key']
        ];
    }

    public function rules()
    {
        return [
            [['name', 'email', 'content'], 'required'],
            ['email', 'email'],
            ['content', 'trim'],
            ['date_create', 'default', 'value' => 'datetime'],
        ];
    }

    public function behaviors()
    {
        return [
            'datetime' => [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['date_create', 'date_update'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => 'date_update',
                ],
                'value' => function () {
                    return date('Y-m-d H:i:s');
                },
            ],
        ];
    }
}