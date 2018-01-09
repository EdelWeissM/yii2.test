<?php

use yii\db\Migration;

/**
 * Class m171226_093338_create_comments_base
 * yii migrate/create --migrationPath=@app/modules/comments/migrations create_comments_base
 * yii migrate --migrationPath=@app/modules/comments/migrations
 */
class m171226_093338_create_comments_base extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ( $this->db->driverName === 'mysql' )
        {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%comments}}', [
            'id'=>$this->primaryKey(),
            'identify_key'=>$this->integer()->defaultValue(null),
            'parent'=>$this->integer()->defaultValue(0)->comment('Родительский комментарий'),
            'content'=>$this->text()->defaultValue(null)->comment('Текст комментария'),
            'active'=>$this->integer(1)->defaultValue(1)->comment('Активность'),
            'date_create'=>$this->dateTime(),
            'date_update'=>$this->dateTime(),
            'user_id'=>$this->integer()->defaultValue(null)->comment('Пользователь'),
            'email'=>$this->string()->comment('Email пользователя'),
            'name'=>$this->string()->comment('Имя пользователя')
        ], $tableOptions);

        $this->createIndex('idx-comments-user_id', '{{%comments}}', 'user_id');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('{{%comments}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171226_093338_create_comments_base cannot be reverted.\n";

        return false;
    }
    */
}
