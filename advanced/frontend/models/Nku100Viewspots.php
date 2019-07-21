<?php

namespace frontend\models;

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

    /**
     * {@inheritdoc}
     * @return Nku100ViewspotsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new Nku100ViewspotsQuery(get_called_class());
    }
}
