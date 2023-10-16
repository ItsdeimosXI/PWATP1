<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Reservaaula]].
 *
 * @see Reservaaula
 */
class ReservaaulaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Reservaaula[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Reservaaula|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
