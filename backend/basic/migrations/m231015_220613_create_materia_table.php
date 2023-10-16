<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%materia}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%carrera}}`
 * - `{{%profesor}}`
 */
class m231015_220613_create_materia_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%materia}}', [
            'id' => $this->primaryKey(),
            'nombre' => $this->string(128)->notNull(),
            'cant_alumnos' => $this->integer()->defaultValue(5),
            'id_carrera' => $this->integer(),
            'id_profesor' => $this->integer(),
        ]);

        // creates index for column `id_carrera`
        $this->createIndex(
            '{{%idx-materia-id_carrera}}',
            '{{%materia}}',
            'id_carrera'
        );

        // add foreign key for table `{{%carrera}}`
        $this->addForeignKey(
            '{{%fk-materia-id_carrera}}',
            '{{%materia}}',
            'id_carrera',
            '{{%carrera}}',
            'id',
            'CASCADE'
        );

        // creates index for column `id_profesor`
        $this->createIndex(
            '{{%idx-materia-id_profesor}}',
            '{{%materia}}',
            'id_profesor'
        );

        // add foreign key for table `{{%profesor}}`
        $this->addForeignKey(
            '{{%fk-materia-id_profesor}}',
            '{{%materia}}',
            'id_profesor',
            '{{%profesor}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%carrera}}`
        $this->dropForeignKey(
            '{{%fk-materia-id_carrera}}',
            '{{%materia}}'
        );

        // drops index for column `id_carrera`
        $this->dropIndex(
            '{{%idx-materia-id_carrera}}',
            '{{%materia}}'
        );

        // drops foreign key for table `{{%profesor}}`
        $this->dropForeignKey(
            '{{%fk-materia-id_profesor}}',
            '{{%materia}}'
        );

        // drops index for column `id_profesor`
        $this->dropIndex(
            '{{%idx-materia-id_profesor}}',
            '{{%materia}}'
        );

        $this->dropTable('{{%materia}}');
    }
}
