<?php

use yii\db\Schema;
use yii\db\Migration;

class m160104_073815_create_event_template_table extends Migration
{
    public function up()
    {
        $this->createTable('event_template', [
            'id' => Schema::TYPE_BIGPK,
            'event' => Schema::TYPE_STRING . ' NOT NULL',
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
