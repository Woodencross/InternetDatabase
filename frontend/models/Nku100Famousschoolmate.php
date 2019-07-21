<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "nku100_famousschoolmate".
 *
 * @property string $id 校友编号
 * @property string $name 校友姓名
 * @property string $sex 校友性别
 * @property string $hometown 校友家乡
 */
class Nku100Famousschoolmate extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nku100_famousschoolmate';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name', 'sex', 'hometown'], 'required'],
            [['id', 'name', 'sex', 'hometown'], 'string', 'max' => 20],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => '校友编号',
            'name' => '校友姓名',
            'sex' => '校友性别',
            'hometown' => '校友家乡',
        ];
    }

    /**
     * {@inheritdoc}
     * @return Nku100FamousschoolmateQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new Nku100FamousschoolmateQuery(get_called_class());
    }
}
