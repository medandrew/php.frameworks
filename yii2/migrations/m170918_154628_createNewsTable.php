<?php

use yii\db\Migration;

class m170918_154628_createNewsTable extends Migration
{
    public function safeUp()
    {
    }

    public function safeDown()
    {
        echo "m170918_154628_createNewsTable cannot be reverted.\n";

        return false;
    }

    public function up()
    {
        $this->createTable('news', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->notNull(),
            'author_id' => $this->integer(3)->null(),
            'text' => $this->text()->notNull(),
            'image' => $this->string(255)->null()
        ]);
    }

    public function down()
    {
        if (false === $this->dropTable('news')) {
            echo "m170918_154628_createNewsTable cannot be reverted.\n";

            return false;
        }
    }
}
