<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\WaterLab;

/**
 * WaterLabSearch represents the model behind the search form of `app\models\WaterLab`.
 */
class WaterLabSearch extends WaterLab
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'patient_id', 'labaratory_no'], 'integer'],
            [['sampling_collected_by', 'sampling_date_time', 'sampling_point', 'specify_address_sampling_point', 'source_of_water_supply', 'type_of_ownership', 'type_of_well', 'well_usage', 'pump_required_priming', 'repair_done_within_2_months', 'water_treated', 'distance_from_well_of_the_following_in_meter', 'analysis_requested', 'designation', 'location_of_well', 'received_by', 'date_time', 'parameters_to_be_examined'], 'safe'],
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
        $query = WaterLab::find();

        if (Yii::$app->user->identity->role->name == 'Patient') {
            $query = WaterLab::find()
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
            'sampling_date_time' => $this->sampling_date_time,
            'date_time' => $this->date_time,
            'labaratory_no' => $this->labaratory_no,
        ]);

        $query->andFilterWhere(['like', 'sampling_collected_by', $this->sampling_collected_by])
            ->andFilterWhere(['like', 'sampling_point', $this->sampling_point])
            ->andFilterWhere(['like', 'specify_address_sampling_point', $this->specify_address_sampling_point])
            ->andFilterWhere(['like', 'source_of_water_supply', $this->source_of_water_supply])
            ->andFilterWhere(['like', 'type_of_ownership', $this->type_of_ownership])
            ->andFilterWhere(['like', 'type_of_well', $this->type_of_well])
            ->andFilterWhere(['like', 'well_usage', $this->well_usage])
            ->andFilterWhere(['like', 'pump_required_priming', $this->pump_required_priming])
            ->andFilterWhere(['like', 'repair_done_within_2_months', $this->repair_done_within_2_months])
            ->andFilterWhere(['like', 'water_treated', $this->water_treated])
            ->andFilterWhere(['like', 'distance_from_well_of_the_following_in_meter', $this->distance_from_well_of_the_following_in_meter])
            ->andFilterWhere(['like', 'analysis_requested', $this->analysis_requested])
            ->andFilterWhere(['like', 'designation', $this->designation])
            ->andFilterWhere(['like', 'location_of_well', $this->location_of_well])
            ->andFilterWhere(['like', 'received_by', $this->received_by])
            ->andFilterWhere(['like', 'parameters_to_be_examined', $this->parameters_to_be_examined]);
        
        // $query->groupBy('patient_id');
        // $query->orderBy('id', SORT_DESC);
        
        return $dataProvider;
    }

    public static function byUser($user_id = "")
    {
        $user_id = ($user_id === "") ? Yii::$app->user->identity->id : $user_id;

        return WaterLab::find()
            ->where(['patient_id' => $user_id])
            ->all();
    }

    public static function records($id)
    {
        $records = WaterLab::find()
            ->where(['patient_id' => $id])
            ->orderBy(['date_time' => SORT_DESC])
            ->all();

        return  [
            'title' => 'Water Laboratory',
            'total' => $records ? count($records) : 0,
            'last' => $records ? date('F d, Y', strtotime($records[0]['date_time'])): ''
        ];
    }
    
    public static function totalPatient()
    {
        $records = WaterLab::find()
            ->select('DISTINCT(patient_id)') 
            ->where(['YEAR(date_time)' => date('Y')])
            ->all(); 
            
        return count($records); 
    }
    
    public static function byMonth($month)
    {
        $total = WaterLab::find()
            ->where(['MONTH(date_time)' => $month, 'YEAR(date_time)' => date('Y')])
            ->all();


        return count($total);
    }
}
