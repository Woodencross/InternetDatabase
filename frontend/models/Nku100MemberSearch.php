<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Nku100Member;

/**
 * Nku100MemberSearch represents the model behind the search form of `frontend\models\Nku100Member`.
 */
class Nku100MemberSearch extends Nku100Member
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NKU100_member_id'], 'integer'],
            [['NKU100_member_name', 'NKU100_member_sex', 'NKU100_member_college', 'NKU100_member_hometown', 'NKU100_member_sign'], 'safe'],
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
        $query = Nku100Member::find();

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
            'NKU100_member_id' => $this->NKU100_member_id,
        ]);

        $query->andFilterWhere(['like', 'NKU100_member_name', $this->NKU100_member_name])
            ->andFilterWhere(['like', 'NKU100_member_sex', $this->NKU100_member_sex])
            ->andFilterWhere(['like', 'NKU100_member_college', $this->NKU100_member_college])
            ->andFilterWhere(['like', 'NKU100_member_hometown', $this->NKU100_member_hometown])
            ->andFilterWhere(['like', 'NKU100_member_sign', $this->NKU100_member_sign]);

        return $dataProvider;
    }
}
