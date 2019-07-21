<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "nku100_member".
 *
 * @property int $NKU100_member_id 成员学号
 * @property string $NKU100_member_name 成员名字
 * @property string $NKU100_member_sex 成员性别
 * @property string $NKU100_member_college 成员学院
 * @property string $NKU100_member_hometown 成员家乡
 * @property string $NKU100_member_sign 个性签名
 */
class Nku100Member extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nku100_member';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NKU100_member_id', 'NKU100_member_name', 'NKU100_member_sex', 'NKU100_member_college', 'NKU100_member_hometown'], 'required'],
            [['NKU100_member_id'], 'integer'],
            [['NKU100_member_name'], 'string', 'max' => 20],
            [['NKU100_member_sex'], 'string', 'max' => 4],
            [['NKU100_member_college'], 'string', 'max' => 40],
            [['NKU100_member_hometown'], 'string', 'max' => 25],
            [['NKU100_member_sign'], 'string', 'max' => 255],
            [['NKU100_member_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'NKU100_member_id' => '成员学号',
            'NKU100_member_name' => '成员名字',
            'NKU100_member_sex' => '成员性别',
            'NKU100_member_college' => '成员学院',
            'NKU100_member_hometown' => '成员家乡',
            'NKU100_member_sign' => '个性签名',
        ];
    }
}
