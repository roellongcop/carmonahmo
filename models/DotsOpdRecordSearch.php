<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DotsOpdRecord;

/**
 * DotsOpdRecordSearch represents the model behind the search form of `app\models\DotsOpdRecord`.
 */
class DotsOpdRecordSearch extends DotsOpdRecord
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'dots_id'], 'integer'],
            [['date', 'bp', 'wt', 'pr', 'rr', 't', 'S', 'O', 'A', 'P', 'smoking_hx'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = DotsOpdRecord::find();

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
            'dots_id' => $this->dots_id,
            'date' => $this->date,
        ]);

        $query->andFilterWhere(['like', 'bp', $this->bp])
            ->andFilterWhere(['like', 'wt', $this->wt])
            ->andFilterWhere(['like', 'pr', $this->pr])
            ->andFilterWhere(['like', 'rr', $this->rr])
            ->andFilterWhere(['like', 't', $this->t])
            ->andFilterWhere(['like', 'S', $this->S])
            ->andFilterWhere(['like', 'O', $this->O])
            ->andFilterWhere(['like', 'A', $this->A])
            ->andFilterWhere(['like', 'P', $this->P])
            ->andFilterWhere(['like', 'smoking_hx', $this->smoking_hx]);

        if (Yii::$app->user->identity->role->name == 'Patient') {
            $query->andFilterWhere([
                'd.patient_id' => Yii::$app->user->identity->id,
            ]);

            $query->innerJoinWith('dots d');
        }
        
        return $dataProvider;
    }

    public static function records($id)
    {
        $records = DotsOpdRecord::find()
            ->alias('do')
            ->innerJoinWith('dots d')
            ->where(['d.patient_id' => $id])
            ->orderBy(['do.date' => SORT_DESC])
            ->all();

        return  [
            'title' => 'OPD Records',
            'total' => $records ? count($records) : 0,
            'last' => $records ? date('F d, Y', strtotime($records[0]['date'])): ''
        ];
    }
}
