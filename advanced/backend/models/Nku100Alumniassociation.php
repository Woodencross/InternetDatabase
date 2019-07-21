<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "nku100_alumniassociation".
 *
 * @property string $id 校友会编号
 * @property string $location 校友会地区
 * @property string $contactor 校友会联系人
 * @property string $contact 校友会联系方式
 */
class Nku100Alumniassociation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nku100_alumniassociation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'location', 'contactor', 'contact'], 'required'],
            [['id', 'location', 'contactor'], 'string', 'max' => 20],
            [['contact'], 'string', 'max' => 30],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => '校友会编号',
            'location' => '校友会地区',
            'contactor' => '校友会联系人',
            'contact' => '校友会联系方式',
        ];
    }
}
