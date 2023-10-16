<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%aula}}`.
 */
class m231015_215114_create_aula_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%aula}}', [
            'id' => $this->primaryKey(),
            'descripcion' => $this->string(128)->notNull(),
            'ubicacion' => $this->string(128)->notNull(),
            'cant_proyector' => $this->integer()->defaultValue(0),
            'aforo' => $this->integer()->defaultValue(0),
            'es_clilmatizada' => $this->boolean()->defaultValue(false),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%aula}}');
    }
}
