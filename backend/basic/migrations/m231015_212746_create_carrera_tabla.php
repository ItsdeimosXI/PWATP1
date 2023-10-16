<?php

use yii\db\Migration;

/**
 * Class m231015_212746_create_carrera_tabla
 */
class m231015_212746_create_carrera_tabla extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('carrera', [
            'id' => $this->primaryKey(),
            'nombre' => $this->string(128)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('carrera');

        return false;
    }

}
