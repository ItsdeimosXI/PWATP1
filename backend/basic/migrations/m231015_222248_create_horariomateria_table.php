<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%horariomateria}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%materia}}`
 * - `{{%reservaaula}}`
 */
class m231015_222248_create_horariomateria_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%horariomateria}}', [
            'id' => $this->primaryKey(),
            'id_materia' => $this->integer(),
            'id_reserva' => $this->integer(),
            'fh_desde' => $this->datetime(),
            'fh_hasta' => $this->datetime(),
        ]);

        // creates index for column `id_materia`
        $this->createIndex(
            '{{%idx-horariomateria-id_materia}}',
            '{{%horariomateria}}',
            'id_materia'
        );

        // add foreign key for table `{{%materia}}`
        $this->addForeignKey(
            '{{%fk-horariomateria-id_materia}}',
            '{{%horariomateria}}',
            'id_materia',
            '{{%materia}}',
            'id',
            'CASCADE'
        );

        // creates index for column `id_reserva`
        $this->createIndex(
            '{{%idx-horariomateria-id_reserva}}',
            '{{%horariomateria}}',
            'id_reserva'
        );

        // add foreign key for table `{{%reservaaula}}`
        $this->addForeignKey(
            '{{%fk-horariomateria-id_reserva}}',
            '{{%horariomateria}}',
            'id_reserva',
            '{{%reservaaula}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%materia}}`
        $this->dropForeignKey(
            '{{%fk-horariomateria-id_materia}}',
            '{{%horariomateria}}'
        );

        // drops index for column `id_materia`
        $this->dropIndex(
            '{{%idx-horariomateria-id_materia}}',
            '{{%horariomateria}}'
        );

        // drops foreign key for table `{{%reservaaula}}`
        $this->dropForeignKey(
            '{{%fk-horariomateria-id_reserva}}',
            '{{%horariomateria}}'
        );

        // drops index for column `id_reserva`
        $this->dropIndex(
            '{{%idx-horariomateria-id_reserva}}',
            '{{%horariomateria}}'
        );

        $this->dropTable('{{%horariomateria}}');
    }
}
