<?php

use yii\db\Schema;
use yii\db\Migration;

class m160104_073803_create_newsletter_template_table extends Migration
{
    public function up()
    {
        $this->createTable('newsletter_template', [
            'id' => Schema::TYPE_BIGPK,
            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'code' => Schema::TYPE_STRING . ' NOT NULL',
            'message' => Schema::TYPE_TEXT . ' NOT NULL',
            'variable_info' => Schema::TYPE_STRING . ' NOT NULL',
            'status' => Schema::TYPE_STRING . ' NOT NULL',
        ]);
    }

    public function down()
    {
       $this->dropTable('newsletter_template');
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
