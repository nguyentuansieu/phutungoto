<?php

use yii\db\Schema;
use yii\db\Migration;

class m151203_211056_post_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%post}}', [
          'id' => $this->primaryKey(),
          'category_id' => $this->integer()->notNull(),
          'title' => $this->string()->notNull()->unique(),
          'slug' => $this->string()->notNull(),
          'image' => $this->string(),
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
        $this->dropTable('{{%post}}');
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
