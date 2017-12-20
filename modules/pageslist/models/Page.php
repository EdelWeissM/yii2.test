<?php
/**
 * Created by PhpStorm.
 * User: mparkhomenko
 * Date: 19.12.2017
 * Time: 10:43
 */

namespace app\modules\pageslist\models;

use yii\db\ActiveRecord;

/**
 * * Class Page
 * @package app\modules\pageslist\models
 */
class Page extends ActiveRecord
{
    /**
     * * Function for returning source table name
     * @return string whit name of table Pages
     */
    public static function tableName()
    {
        return '{{%pages}}';
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPages(){
        return $this->hasMany(Page::className(), ['parent_id' => 'id']);
    }
}