<?php
/**
 * Created by PhpStorm.
 * User: mparkhomenko
 * Date: 19.12.2017
 * Time: 10:43
 */

/**
 * @author mparkhomenk
 * @version 1.0
 */

namespace app\modules\pages\models;

use yii\db\ActiveRecord;

/**
 * * Class Page witch work with db table "pages"
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
    public function getPages()
    {
        return $this->hasMany(Page::className(), ['parent_id' => 'id']);
    }
}