<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[Nku100Member]].
 *
 * @see Nku100Member
 */
class Nku100MemberQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Nku100Member[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Nku100Member|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
