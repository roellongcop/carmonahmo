<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Dots;

/**
 * DotsSearch represents the model behind the search form of `app\models\Dots`.
 */
class DotsSearch extends Dots
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'patient_id', 'age', 'sex', 'telephone_number'], 'integer'],
            [['name_of_collection_unit', 'date_of_request', 'history_of_treatment', 'disease_classification', 'reason_for_examination', 'type_of_specimen', 'test_requested', 'specimen', 'date_of_collection'], 'safe'],
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
        $query = Dots::find();

        if (Yii::$app->user->identity->role->name == 'Patient') {
            $query = Dots::find()
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
            'date_of_request' => $this->date_of_request,
            'age' => $this->age,
            'sex' => $this->sex,
            'telephone_number' => $this->telephone_number,
        ]);

        $query->andFilterWhere(['like', 'name_of_collection_unit', $this->name_of_collection_unit])
            ->andFilterWhere(['like', 'history_of_treatment', $this->history_of_treatment])
            ->andFilterWhere(['like', 'disease_classification', $this->disease_classification])
            ->andFilterWhere(['like', 'reason_for_examination', $this->reason_for_examination])
            ->andFilterWhere(['like', 'type_of_specimen', $this->type_of_specimen])
            ->andFilterWhere(['like', 'test_requested', $this->test_requested])
            ->andFilterWhere(['like', 'specimen', $this->specimen])
            ->andFilterWhere(['like', 'date_of_collection', $this->date_of_collection]);
            
        $query->groupBy('patient_id');
        $query->orderBy('id', SORT_DESC);

        return $dataProvider;
    }


    public static function byUser($user_id = "")
    {
        $user_id = ($user_id === "") ? Yii::$app->user->identity->id : $user_id;

        return Dots::find()
            ->where(['patient_id' => $user_id])
            ->all();
    }


    public static function records($id, $summary = true)
    {
        $records = Dots::find()
                ->where(['patient_id' => $id])
                ->orderBy(['date_of_request' => SORT_DESC])
                ->all();

        if ($summary === true) {
            return  [
                'title' => 'Dots Records',
                'total' => $records ? count($records) : 0,
                'last' => $records ? date('F d, Y', strtotime($records[0]['date_of_request'])): ''
            ];
        }

        return $records;
    }
    
    public static function totalPatient()
    {
        $records = Dots::find()
            ->select('DISTINCT(patient_id)') 
            ->where(['YEAR(date_of_request)' => date('Y')])
            ->all(); 
            
        return count($records); 
    }
    
    public static function byMonth($month)
    {
        $total = Dots::find()
            ->where(['MONTH(date_of_request)' => $month, 'YEAR(date_of_request)' => date('Y')])
            ->all();


        return count($total);
    }
}
