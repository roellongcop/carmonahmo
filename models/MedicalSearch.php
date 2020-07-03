<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Medical;

/**
 * MedicalSearch represents the model behind the search form of `app\models\Medical`.
 */
class MedicalSearch extends Medical
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'patient_id'], 'integer'],
            [['assessment_date', 'chief_complaint', 'primary_diagnosis', 'clinical_history', 'other_diagnosis', 'treatment', 'date_created', 'status'], 'safe'],
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
        $query = Medical::find();

        if (Yii::$app->user->identity->role->name == 'Patient') {
            $query = Medical::find()
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
            'assessment_date' => $this->assessment_date,
            'date_created' => $this->date_created,
        ]);

        $query->andFilterWhere(['like', 'chief_complaint', $this->chief_complaint])
            ->andFilterWhere(['like', 'primary_diagnosis', $this->primary_diagnosis])
            ->andFilterWhere(['like', 'clinical_history', $this->clinical_history])
            ->andFilterWhere(['like', 'other_diagnosis', $this->other_diagnosis])
            ->andFilterWhere(['like', 'treatment', $this->treatment])
            ->andFilterWhere(['like', 'status', $this->status]);
        
        $query->groupBy('patient_id');
        $query->orderBy('id', SORT_DESC);
        
        return $dataProvider;
    }

    public static function byUser($user_id = "")
    {
        $user_id = ($user_id === "") ? Yii::$app->user->identity->id : $user_id;

        return Medical::find()
            ->where(['patient_id' => $user_id])
            ->all();
    }

    public static function records($id)
    {
        $records = Medical::find()
            ->where(['patient_id' => $id])
            ->orderBy(['date_created' => SORT_DESC])
            ->all();

        return  [
            'title' => 'Medical Records',
            'total' => $records ? count($records) : 0,
            'last' => $records ? date('F d, Y', strtotime($records[0]['date_created'])): ''
        ];
    }
    
    public static function totalPatient()
    {
        $records = Medical::find()
            ->select('DISTINCT(patient_id)') 
            ->where(['YEAR(assessment_date)' => date('Y')])
            ->all(); 
            
        return count($records); 
    }
}
