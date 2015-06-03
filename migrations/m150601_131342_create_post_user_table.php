<?php

use yii\db\Schema;
use yii\db\Migration;

class m150601_131342_create_post_user_table extends Migration
{
    public function safeUp()
    {
			$this->createTable('post_t', ['id'=>'pk', 'post'=>'text', 'user_id'=>'int']);
			$this->addForeignKey('post_regular_user_id','post_t','user_id', 'regular_user','id');
    }

    public function safeDown()
    {
      $this->dropTable('post_t');
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
