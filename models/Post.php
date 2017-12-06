<?php
/**
 * Created by PhpStorm.
 * User: mparkhomenko
 * Date: 05.12.2017
 * Time: 16:57
 */

namespace app\models;


use yii\db\ActiveRecord;

class Post extends ActiveRecord
{
    public static function tableName()
    {
        return 'post';
    }

}