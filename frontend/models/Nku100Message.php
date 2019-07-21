<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "nku100_message".
 *
 * @property int $NKU100_message_id 留言编号
 * @property string $NKU100_message_contend 留言内容
 * @property string $NKU100_message_data 留言日期
 */
class Nku100Message extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nku100_message';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NKU100_message_contend', 'NKU100_message_data'], 'required'],
            [['NKU100_message_data'], 'safe'],
            [['NKU100_message_contend'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'NKU100_message_id' => '留言编号',
            'NKU100_message_contend' => '留言内容',
            'NKU100_message_data' => '留言日期',
        ];
    }
}
