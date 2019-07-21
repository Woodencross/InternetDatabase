<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[Nku100Activity]].
 *
 * @see Nku100Activity
 */
class Nku100ActivityQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Nku100Activity[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Nku100Activity|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
