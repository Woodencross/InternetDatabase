<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "nku100_news".
 *
 * @property int $NKU100_news_id 校庆新闻ID
 * @property string $NKU100_news_name 校庆新闻名称
 * @property string $NKU100_news_url 校庆新闻链接
 */
class Nku100News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nku100_news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NKU100_news_name', 'NKU100_news_url'], 'required'],
            [['NKU100_news_name'], 'string', 'max' => 20],
            [['NKU100_news_url'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'NKU100_news_id' => '校庆新闻ID',
            'NKU100_news_name' => '校庆新闻名称',
            'NKU100_news_url' => '校庆新闻链接',
        ];
    }
}
