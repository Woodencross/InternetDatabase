<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[Nku100Notice]].
 *
 * @see Nku100Notice
 */
class Nku100NoticeQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Nku100Notice[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Nku100Notice|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
