<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Horariomateria]].
 *
 * @see Horariomateria
 */
class HorariomateriaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Horariomateria[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Horariomateria|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
