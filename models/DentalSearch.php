<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Dental;

/**
 * DentalSearch represents the model behind the search form of `app\models\Dental`.
 */
class DentalSearch extends Dental
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'patient_id'], 'integer'],
            [['date', 'chief_complaint', 'medical_history', 'dental_history', 'treatment', 'diagnosis', 'oral_condition', 'dental_health'], 'safe'],
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
        $query = Dental::find();

        if (Yii::$app->user->identity->role->name == 'Patient') {
            $query = Dental::find()
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
        ]);

        $query->andFilterWhere(['like', 'chief_complaint', $this->chief_complaint])
            ->andFilterWhere(['like', 'medical_history', $this->medical_history])
            ->andFilterWhere(['like', 'dental_history', $this->dental_history])
            ->andFilterWhere(['like', 'treatment', $this->treatment])
            ->andFilterWhere(['like', 'diagnosis', $this->diagnosis])
            ->andFilterWhere(['like', 'oral_condition', $this->oral_condition])
            ->andFilterWhere(['like', 'dental_health', $this->dental_health]);
        
        $query->groupBy('patient_id');
        $query->orderBy('id', SORT_DESC);
        
        return $dataProvider;
    }


    public static function byUser($user_id = "")
    {
        $user_id = ($user_id === "") ? Yii::$app->user->identity->id : $user_id;

        return Dental::find()
            ->where(['patient_id' => $user_id])
            ->all();
    }

    public static function records($id)
    {
        $records = Dental::find()
            ->where(['patient_id' => $id])
            ->orderBy(['date' => SORT_DESC])
            ->all();

        return  [
            'title' => 'Dental Records',
            'total' => $records ? count($records) : 0,
            'last' => $records ? date('F d, Y', strtotime($records[0]['date'])): ''
        ];
    }
    
    public static function totalPatient()
    {
        $records = Dental::find()
            ->select('DISTINCT(patient_id)') 
            ->where(['YEAR(date)' => date('Y')])
            ->all(); 
            
        return count($records); 
    }
    
    public static function byMonth($month)
    {
        $total = Dental::find()
            ->where(['MONTH(date)' => $month, 'YEAR(date)' => date('Y')])
            ->all();


        return count($total);
    }
}
