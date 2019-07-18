<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[Nku100Famousschoolmate]].
 *
 * @see Nku100Famousschoolmate
 */
class Nku100FamousschoolmateQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Nku100Famousschoolmate[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Nku100Famousschoolmate|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
