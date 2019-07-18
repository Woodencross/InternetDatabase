<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Nku100Activity;

/**
 * Nku100ActivitySearch represents the model behind the search form of `frontend\models\Nku100Activity`.
 */
class Nku100ActivitySearch extends Nku100Activity
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NKU100_activity_id'], 'integer'],
            [['NKU100_activity_name', 'NKU100_activity_time', 'NKU100_activity_type', 'NKU100_activity_place', 'NKU100_activity_department'], 'safe'],
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
        $query = Nku100Activity::find();

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
            'NKU100_activity_id' => $this->NKU100_activity_id,
            'NKU100_activity_time' => $this->NKU100_activity_time,
        ]);

        $query->andFilterWhere(['like', 'NKU100_activity_name', $this->NKU100_activity_name])
            ->andFilterWhere(['like', 'NKU100_activity_type', $this->NKU100_activity_type])
            ->andFilterWhere(['like', 'NKU100_activity_place', $this->NKU100_activity_place])
            ->andFilterWhere(['like', 'NKU100_activity_department', $this->NKU100_activity_department]);

        return $dataProvider;
    }
}
