<?php

use yii\db\Schema;
use yii\db\Migration;

class m151203_050947_page_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%page}}', [
          'id' => $this->primaryKey(),
          'title' => $this->string()->notNull()->unique(),
          'slug' => $this->string()->notNull(),
          'content' => $this->text(),

          'meta_title' => $this->string(70),
          'meta_keywords' => $this->string(),
          'meta_description' => $this->string(160),

          'status' => $this->smallInteger()->notNull()->defaultValue(10),
          'created_by' => $this->integer(),
          'updated_by' => $this->integer(),
          'created_at' => $this->integer(),
          'updated_at' => $this->integer(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%page}}');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
