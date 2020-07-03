<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Physical;

/**
 * PhysicalSearch represents the model behind the search form of `app\models\Physical`.
 */
class PhysicalSearch extends Physical
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'patient_id'], 'integer'],
            [['occupation', 'diagnosis', 'date', 'time', 'bp', 'pr', 'rr', 'temp', 'wt', 'status'], 'safe'],
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
        $query = Physical::find();

        if (Yii::$app->user->identity->role->name == 'Patient') {
            $query = Physical::find()
            ->where(['patient_id' => Yii::$app->user->identity->id]);
        }

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
            'patient_id' => $this->patient_id,
            'date' => $this->date,
            'time' => $this->time,
        ]);

        $query->andFilterWhere(['like', 'occupation', $this->occupation])
            ->andFilterWhere(['like', 'diagnosis', $this->diagnosis])
            ->andFilterWhere(['like', 'bp', $this->bp])
            ->andFilterWhere(['like', 'pr', $this->pr])
            ->andFilterWhere(['like', 'rr', $this->rr])
            ->andFilterWhere(['like', 'temp', $this->temp])
            ->andFilterWhere(['like', 'wt', $this->wt])
            ->andFilterWhere(['like', 'status', $this->status]);
            
        $query->groupBy('patient_id');
        $query->orderBy('id', SORT_DESC);

        return $dataProvider;
    }

    public static function byUser($user_id = "")
    {
        $user_id = ($user_id === "") ? Yii::$app->user->identity->id : $user_id;

        return Physical::find()
            ->where(['patient_id' => $user_id])
            ->all();
    }

    public static function records($id)
    {
        $records = Physical::find()
            ->where(['patient_id' => $id])
            ->orderBy(['date' => SORT_DESC])
            ->all();

        return  [
            'title' => 'Physical Records',
            'total' => $records ? count($records) : 0,
            'last' => $records ? date('F d, Y', strtotime($records[0]['date'])): ''
        ];
    }
    
    public static function totalPatient()
    {
        $physical = Physical::find()
            ->select('DISTINCT(patient_id)') 
            ->where(['YEAR(date)' => date('Y')])
            ->all(); 
            
        return count($physical); 
    }
    
    public static function byMonth($month)
    {
        $total = Physical::find()
            ->where(['MONTH(date)' => $month, 'YEAR(date)' => date('Y')])
            ->all();


        return count($total);
    }
}
