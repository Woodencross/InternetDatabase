<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "nku100_notice".
 *
 * @property int $NKU100_notice_id 校庆公告ID
 * @property string $NKU100_notice_name 校庆公告名称
 * @property string $NKU100_notice_url 校庆公告链接
 */
class Nku100Notice extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nku100_notice';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NKU100_notice_name', 'NKU100_notice_url'], 'required'],
            [['NKU100_notice_name'], 'string', 'max' => 20],
            [['NKU100_notice_url'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'NKU100_notice_id' => '校庆公告ID',
            'NKU100_notice_name' => '校庆公告名称',
            'NKU100_notice_url' => '校庆公告链接',
        ];
    }

    /**
     * {@inheritdoc}
     * @return Nku100NoticeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new Nku100NoticeQuery(get_called_class());
    }
}
