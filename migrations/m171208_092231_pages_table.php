<?php

use yii\db\Migration;

/**
 * Class m171208_092231_pages_table
 */
class m171208_092231_pages_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('pages', [
            'id'=> $this->PrimaryKey(),
            'parent_id'=>$this->integer(11),
            'url'=>$this->string()->notNull(),
            'name'=>$this->string()->notNull(),
            'excerpt'=>$this->string(),
            'content'=>$this->text(),
            'datetime'=>$this->datetime()->notNull(),
        ]);

        $this->createIndex(
            'idx-pages-url',
            'pages',
            'url'
        );

        $this->addForeignKey(
            'fk-pages-parent_id',
            'pages',
            'parent_id',
            'pages',
            'id'
        );
    }

    public function safeDown()
    {
        $this->dropTable('pages');
        //echo "m171208_092231_pages_table cannot be reverted.\n";
        //return false;

        $this->dropIndex(
            'idx-pages-url',
            'pages'
        );

        $this->dropForeignKey(
            'fk-pages-parent_id',
            'pages'
        );
    }

    // Use up()/down() to run migration code without a transaction.
    /*public function up()
    {
        $this->createTable('pages', [
            'id'=> $this->PrimaryKey(),
            'parent_id'=>$this->integer(11),
            'url'=>$this->string()->notNull(),
            'name'=>$this->string()->notNull(),
            'excerpt'=>$this->string(),
            'content'=>$this->text(),
            'datetime'=>$this->datetime()->notNull(),
            ]);

        $this->createIndex(
            'idx-pages-url',
            'pages',
            'url'
        );

        $this->addForeignKey(
            'fk-pages-parent_id',
            'pages',
            'parent_id',
            'pages',
            'id'
        );
    }

    public function down()
    {
        $this->dropTable('pages');
        //echo "m171208_092231_pages_table cannot be reverted.\n";
        //return false;

        $this->dropIndex(
            'idx-pages-url',
            'pages'
        );

        $this->dropForeignKey(
            'fk-pages-parent_id',
            'pages'
        );
    }*/
}
