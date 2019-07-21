<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Nku100Message;

/**
 * Nku100MessageSearch represents the model behind the search form of `frontend\models\Nku100Message`.
 */
class Nku100MessageSearch extends Nku100Message
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NKU100_message_id'], 'integer'],
            [['NKU100_message_contend', 'NKU100_message_data'], 'safe'],
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
        $query = Nku100Message::find();

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
            'NKU100_message_id' => $this->NKU100_message_id,
            'NKU100_message_data' => $this->NKU100_message_data,
        ]);

        $query->andFilterWhere(['like', 'NKU100_message_contend', $this->NKU100_message_contend]);

        return $dataProvider;
    }
}
