<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[Nku100News]].
 *
 * @see Nku100News
 */
class Nku100NewsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Nku100News[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Nku100News|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
