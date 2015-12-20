<?php

use yii\db\Schema;
use yii\db\Migration;

class m151201_012919_nested_category extends Migration
{
    public function up()
    {
      $this->addColumn('{{%category}}', 'tree', $this->integer());
      $this->addColumn('{{%category}}', 'parent_id', $this->integer());
      $this->addColumn('{{%category}}', 'lft', $this->integer()->notNull());
      $this->addColumn('{{%category}}', 'rgt', $this->integer()->notNull());
      $this->addColumn('{{%category}}', 'depth', $this->integer()->notNull());
    }

    public function down()
    {
        $this->dropColumn('{{%category}}', 'tree');
        $this->dropColumn('{{%category}}', 'parent_id');
        $this->dropColumn('{{%category}}', 'lft');
        $this->dropColumn('{{%category}}', 'rgt');
        $this->dropColumn('{{%category}}', 'depth');
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
