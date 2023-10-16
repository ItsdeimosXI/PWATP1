<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%reservaaula}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%aula}}`
 */
class m231015_221653_create_reservaaula_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%reservaaula}}', [
            'id' => $this->primaryKey(),
            'id_aula' => $this->integer(),
            'fh_desde' => $this->datetime(),
            'fh_hasta' => $this->datetime(),
            'observacion' => $this->string(256),
        ]);

        // creates index for column `id_aula`
        $this->createIndex(
            '{{%idx-reservaaula-id_aula}}',
            '{{%reservaaula}}',
            'id_aula'
        );

        // add foreign key for table `{{%aula}}`
        $this->addForeignKey(
            '{{%fk-reservaaula-id_aula}}',
            '{{%reservaaula}}',
            'id_aula',
            '{{%aula}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%aula}}`
        $this->dropForeignKey(
            '{{%fk-reservaaula-id_aula}}',
            '{{%reservaaula}}'
        );

        // drops index for column `id_aula`
        $this->dropIndex(
            '{{%idx-reservaaula-id_aula}}',
            '{{%reservaaula}}'
        );

        $this->dropTable('{{%reservaaula}}');
    }
}
