<?php

use yii\db\Schema;
use yii\db\Migration;

class m151130_130246_add_column_role_user extends Migration
{
  public function up()
  {
    $this->addColumn('{{%user}}', 'role', $this->smallInteger()->notNull()->defaultValue(10));
  }

  public function down()
  {
    $this->dropColumn('{{%user}}', 'role');
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
