<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "nku100_activity".
 *
 * @property int $NKU100_activity_id 活动编号
 * @property string $NKU100_activity_name 活动名称
 * @property string $NKU100_activity_time 活动时间
 * @property string $NKU100_activity_type 活动类型
 * @property string $NKU100_activity_place 活动地点
 * @property string $NKU100_activity_department 主办单位
 */
class Nku100Activity extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nku100_activity';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NKU100_activity_name', 'NKU100_activity_time', 'NKU100_activity_type', 'NKU100_activity_place', 'NKU100_activity_department'], 'required'],
            [['NKU100_activity_time'], 'safe'],
            [['NKU100_activity_name'], 'string', 'max' => 100],
            [['NKU100_activity_type', 'NKU100_activity_place'], 'string', 'max' => 20],
            [['NKU100_activity_department'], 'string', 'max' => 25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'NKU100_activity_id' => '活动编号',
            'NKU100_activity_name' => '活动名称',
            'NKU100_activity_time' => '活动时间',
            'NKU100_activity_type' => '活动类型',
            'NKU100_activity_place' => '活动地点',
            'NKU100_activity_department' => '主办单位',
        ];
    }
}
