<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reservaaula".
 *
 * @property int $id
 * @property int|null $id_aula
 * @property string|null $fh_desde
 * @property string|null $fh_hasta
 * @property string|null $observacion
 *
 * @property Aula $aula
 * @property Horariomateria[] $horariomaterias
 */
class Reservaaula extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reservaaula';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_aula'], 'default', 'value' => null],
            [['id_aula'], 'integer'],
            [['fh_desde', 'fh_hasta'], 'safe'],
            [['observacion'], 'string', 'max' => 256],
            [['id_aula'], 'exist', 'skipOnError' => true, 'targetClass' => Aula::class, 'targetAttribute' => ['id_aula' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_aula' => 'Id Aula',
            'fh_desde' => 'Fh Desde',
            'fh_hasta' => 'Fh Hasta',
            'observacion' => 'Observacion',
        ];
    }

    /**
     * Gets query for [[Aula]].
     *
     * @return \yii\db\ActiveQuery|AulaQuery
     */
    public function getAula()
    {
        return $this->hasOne(Aula::class, ['id' => 'id_aula']);
    }

    /**
     * Gets query for [[Horariomaterias]].
     *
     * @return \yii\db\ActiveQuery|HorariomateriaQuery
     */
    public function getHorariomaterias()
    {
        return $this->hasMany(Horariomateria::class, ['id_reserva' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return ReservaaulaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ReservaaulaQuery(get_called_class());
    }
}
