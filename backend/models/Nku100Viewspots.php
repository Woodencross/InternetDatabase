<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "nku100_viewspots".
 *
 * @property int $NKU100_viewspots_id 景点ID
 * @property string $NKU100_viewspots_name 景点名称
 * @property string $NKU100_viewspots_content 景点简介
 */
class Nku100Viewspots extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nku100_viewspots';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NKU100_viewspots_name', 'NKU100_viewspots_content'], 'required'],
            [['NKU100_viewspots_name'], 'string', 'max' => 20],
            [['NKU100_viewspots_content'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'NKU100_viewspots_id' => '景点ID',
            'NKU100_viewspots_name' => '景点名称',
            'NKU100_viewspots_content' => '景点简介',
        ];
    }
}
