<?php
/** 
*team:数据库咸鱼，nku
*coding by 周坤 1711416，20190718
*/
namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%nku100_volunteer}}".
 *
 * @property int $NKU100_volunteer_id id号
 * @property string $NKU100_volunteer_name 志愿者姓名
 * @property string $NKU100_volunteer_number 志愿者学号
 */
class Nku100Volunteer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%nku100_volunteer}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NKU100_volunteer_name', 'NKU100_volunteer_number'], 'required'],
            [['NKU100_volunteer_name', 'NKU100_volunteer_number'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'NKU100_volunteer_id' => 'id号',
            'NKU100_volunteer_name' => '志愿者姓名',
            'NKU100_volunteer_number' => '志愿者学号',
        ];
    }
}
