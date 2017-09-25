<?php

use yii\db\Migration;

class m170918_154748_createAuthorsTable extends Migration
{
    public function safeUp()
    {
    }

    public function safeDown()
    {
        echo "m170918_154748_createAuthorsTable cannot be reverted.\n";

        return false;
    }

    public function up()
    {
        $this->createTable('authors', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull()
        ]);
    }

    public function down()
    {
        if (false === $this->dropTable('authors')) {
            echo "m170918_154748_createAuthorsTable cannot be reverted.\n";

            return false;
        }
    }
}
