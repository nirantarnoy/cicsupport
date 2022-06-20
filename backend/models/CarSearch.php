<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Car;

/**
 * CarSearch represents the model behind the search form of `backend\models\Car`.
 */
class CarSearch extends Car
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'area_id', 'car_type_id', 'is_new', 'case_type', 'responsibility', 'status', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
            [['doc_no', 'trans_date', 'car_desc', 'preventive_desc', 'target_finish_date', 'note'], 'safe'],
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
        $query = Car::find();

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
            'trans_date' => $this->trans_date,
            'area_id' => $this->area_id,
            'car_type_id' => $this->car_type_id,
            'is_new' => $this->is_new,
            'case_type' => $this->case_type,
            'target_finish_date' => $this->target_finish_date,
            'responsibility' => $this->responsibility,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'created_by' => $this->created_by,
            'updated_at' => $this->updated_at,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'doc_no', $this->doc_no])
            ->andFilterWhere(['like', 'car_desc', $this->car_desc])
            ->andFilterWhere(['like', 'preventive_desc', $this->preventive_desc])
            ->andFilterWhere(['like', 'note', $this->note]);

        return $dataProvider;
    }
}
