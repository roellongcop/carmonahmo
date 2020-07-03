<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Birthing;

/**
 * BirthingSearch represents the model behind the search form of `app\models\Birthing`.
 */
class BirthingSearch extends Birthing
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'patient_id'], 'integer'],
            [['chief_complaint', 'start_of_pregnancy', 'end_of_pregnancy', 'guardian_name', 'guardian_civil_status', 'guardian_gender', 'guardian_contact', 'guardian_age', 'guardian_relationship', 'guardian_address', 'date_added'], 'safe'],
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
        $query = Birthing::find();

        if (Yii::$app->user->identity->role->name == 'Patient') {
            $query = Birthing::find()
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
            'start_of_pregnancy' => $this->start_of_pregnancy,
            'end_of_pregnancy' => $this->end_of_pregnancy,
            'date_added' => $this->date_added,
        ]);

        $query->andFilterWhere(['like', 'chief_complaint', $this->chief_complaint])
            ->andFilterWhere(['like', 'guardian_name', $this->guardian_name])
            ->andFilterWhere(['like', 'guardian_civil_status', $this->guardian_civil_status])
            ->andFilterWhere(['like', 'guardian_gender', $this->guardian_gender])
            ->andFilterWhere(['like', 'guardian_contact', $this->guardian_contact])
            ->andFilterWhere(['like', 'guardian_age', $this->guardian_age])
            ->andFilterWhere(['like', 'guardian_relationship', $this->guardian_relationship])
            ->andFilterWhere(['like', 'guardian_address', $this->guardian_address]);
        
        $query->groupBy('patient_id');
        $query->orderBy('id', SORT_DESC);
        
        return $dataProvider;
    }

    public static function patient()
    {
        return Birthing::find()
            ->where(['status' => 0])
            ->groupBy('patient_id')
            ->all();
    }

    public static function byUser($user_id = "")
    {
        $user_id = ($user_id === "") ? Yii::$app->user->identity->id : $user_id;

        return Birthing::find()
            ->where(['patient_id' => $user_id])
            ->all();
    }

    public static function records($id, $summary = true)
    {
        $records = Birthing::find()
                ->where(['patient_id' => $id])
                ->orderBy(['date_added' => SORT_DESC])
                ->all();

        if ($summary === true) {
            return  [
                'title' => 'Birthing Records',
                'total' => $records ? count($records) : 0,
                'last' => $records ? date('F d, Y', strtotime($records[0]['date_added'])): ''
            ];
        }

        return $records;
    }
    
    public static function totalPatient()
    {
        $records = Birthing::find()
            ->select('DISTINCT(patient_id)') 
            ->where(['YEAR(date_added)' => date('Y')])
            ->all(); 
            
        return count($records); 
    }
    
    public static function byMonth($month)
    {
        $total = Birthing::find()
            ->where(['MONTH(date_added)' => $month, 'YEAR(date_added)' => date('Y')])
            ->all();


        return count($total);
    }
}
