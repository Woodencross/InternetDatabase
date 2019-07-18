<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Nku100Notice;

/**
 * Nku100NoticeSearch represents the model behind the search form of `backend\models\Nku100Notice`.
 */
class Nku100NoticeSearch extends Nku100Notice
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NKU100_notice_id'], 'integer'],
            [['NKU100_notice_name', 'NKU100_notice_url'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Nku100Notice::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'NKU100_notice_id' => $this->NKU100_notice_id,
        ]);

        $query->andFilterWhere(['like', 'NKU100_notice_name', $this->NKU100_notice_name])
            ->andFilterWhere(['like', 'NKU100_notice_url', $this->NKU100_notice_url]);

        return $dataProvider;
    }
}
