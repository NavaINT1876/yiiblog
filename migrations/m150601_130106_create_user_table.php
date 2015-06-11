<?php

use yii\db\Schema;
use yii\db\Migration;

class m150601_130106_create_user_table extends Migration
{
     public function safeUp()
    {
        $this->createTable('countries', ['id'=>'pk', 'country_title'=>'string NOT NULL']);
        $this->insert('countries', [
            'country_title'=> 'First country',
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('countries');

        return false;
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
