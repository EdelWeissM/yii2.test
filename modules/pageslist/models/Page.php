<?php

/**
 * Created by PhpStorm.
 * User: mparkhomenko
 * Date: 19.12.2017
 * Time: 10:43
 */

namespace app\modules\pageslist\models;

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