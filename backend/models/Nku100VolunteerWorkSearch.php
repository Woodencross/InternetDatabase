<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Nku100VolunteerWork;

/**
 * Nku100VolunteerWorkSearch represents the model behind the search form of `backend\models\Nku100VolunteerWork`.
 */
class Nku100VolunteerWorkSearch extends Nku100VolunteerWork
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['NKU100_volunteerwork_name', 'NKU100_volunteerwork_number', 'NKU100_volunteerwork_task', 'NKU100_volunteerwork_department'], 'safe'],
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
        $query = Nku100VolunteerWork::find();

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
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'NKU100_volunteerwork_name', $this->NKU100_volunteerwork_name])
            ->andFilterWhere(['like', 'NKU100_volunteerwork_number', $this->NKU100_volunteerwork_number])
            ->andFilterWhere(['like', 'NKU100_volunteerwork_task', $this->NKU100_volunteerwork_task])
            ->andFilterWhere(['like', 'NKU100_volunteerwork_department', $this->NKU100_volunteerwork_department]);

        return $dataProvider;
    }
}
