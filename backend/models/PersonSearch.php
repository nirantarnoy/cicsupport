<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Person;

/**
 * PersonSearch represents the model behind the search form of `backend\models\Person`.
 */
class PersonSearch extends Person
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'department_id', 'section_id', 'status', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
            [['fname', 'lname', 'prs_no', 'idcard'], 'safe'],
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
        $query = Person::find();

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
            'department_id' => $this->department_id,
            'section_id' => $this->section_id,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'created_by' => $this->created_by,
            'updated_at' => $this->updated_at,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'fname', $this->fname])
            ->andFilterWhere(['like', 'lname', $this->lname])
            ->andFilterWhere(['like', 'prs_no', $this->prs_no])
            ->andFilterWhere(['like', 'idcard', $this->idcard]);

        return $dataProvider;
    }
}
