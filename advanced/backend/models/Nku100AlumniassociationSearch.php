<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Nku100Alumniassociation;

/**
 * Nku100AlumniassociationSearch represents the model behind the search form of `backend\models\Nku100Alumniassociation`.
 */
class Nku100AlumniassociationSearch extends Nku100Alumniassociation
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'location', 'contactor', 'contact'], 'safe'],
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
        $query = Nku100Alumniassociation::find();

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
        $query->andFilterWhere(['like', 'id', $this->id])
            ->andFilterWhere(['like', 'location', $this->location])
            ->andFilterWhere(['like', 'contactor', $this->contactor])
            ->andFilterWhere(['like', 'contact', $this->contact]);

        return $dataProvider;
    }
}
