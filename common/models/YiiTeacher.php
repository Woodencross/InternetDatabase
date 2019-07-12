<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%yii_teacher}}".
 *
 * @property int $id
 * @property string $name
 * @property int $number
 */
class YiiTeacher extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%yii_teacher}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'number'], 'required'],
            [['number'], 'integer'],
            [['name'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'number' => 'Number',
        ];
    }

    /**
     * {@inheritdoc}
     * @return YiiTeacherQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new YiiTeacherQuery(get_called_class());
    }
}
