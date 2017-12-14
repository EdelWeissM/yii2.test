<?php
/**
 * Created by PhpStorm.
 * User: mparkhomenko
 * Date: 06.12.2017
 * Time: 11:53
 */

namespace app\models;


use yii\db\ActiveRecord;

class Author extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%authors}}';
    }

    public function getPosts(){
        return $this->hasMany(Post::className(), ['author_id' => 'id']);
    }


}