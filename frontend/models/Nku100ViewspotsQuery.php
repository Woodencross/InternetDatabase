<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[Nku100Viewspots]].
 *
 * @see Nku100Viewspots
 */
class Nku100ViewspotsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Nku100Viewspots[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Nku100Viewspots|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
