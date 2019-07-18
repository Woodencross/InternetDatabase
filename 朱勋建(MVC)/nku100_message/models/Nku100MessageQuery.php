<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[Nku100Message]].
 *
 * @see Nku100Message
 */
class Nku100MessageQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Nku100Message[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Nku100Message|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
