<?php

use yii\db\Schema;
use yii\db\Migration;

class m160104_073828_create_event_newsletter_template_table extends Migration
{
    public function up()
    {
        $this->createTable('event_newsletter_template', [
            'id' => Schema::TYPE_BIGPK,
            'eventid' => Schema::TYPE_BIGINT . ' NOT NULL',
            'newsletterid' => Schema::TYPE_BIGINT . ' NOT NULL',
        ]);
    }

    public function down()
    {
        $this->dropTable('event_newsletter_template');
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
