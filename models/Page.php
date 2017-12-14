<?php
/**
 * Created by PhpStorm.
 * User: mparkhomenko
 * Date: 11.12.2017
 * Time: 11:51
 */

namespace app\models;


use yii\db\ActiveRecord;

class Page extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%pages}}';
    }

    public function getPages(){
        return $this->hasMany(Page::className(), ['parent_id' => 'id']);
    }
}