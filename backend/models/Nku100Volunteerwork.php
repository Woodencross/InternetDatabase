<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "nku100_volunteerwork".
 *
 * @property int $id 自增id
 * @property string $NKU100_volunteerwork_name 工作名称
 * @property string $NKU100_volunteerwork_number 志愿者学号
 * @property string $NKU100_volunteerwork_task 工作任务
 * @property string $NKU100_volunteerwork_department 从属部门
 */
class Nku100Volunteerwork extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nku100_volunteerwork';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NKU100_volunteerwork_name', 'NKU100_volunteerwork_number', 'NKU100_volunteerwork_task', 'NKU100_volunteerwork_department'], 'required'],
            [['NKU100_volunteerwork_name', 'NKU100_volunteerwork_number'], 'string', 'max' => 50],
            [['NKU100_volunteerwork_task', 'NKU100_volunteerwork_department'], 'string', 'max' => 100],
            [['NKU100_volunteerwork_number'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => '自增id',
            'NKU100_volunteerwork_name' => '工作名称',
            'NKU100_volunteerwork_number' => '志愿者学号',
            'NKU100_volunteerwork_task' => '工作任务',
            'NKU100_volunteerwork_department' => '从属部门',
        ];
    }
}
