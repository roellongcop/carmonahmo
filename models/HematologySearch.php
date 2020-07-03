<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Hematology;

/**
 * HematologySearch represents the model behind the search form of `app\models\Hematology`.
 */
class HematologySearch extends Hematology
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'patient_id', 'staff_id'], 'integer'],
            [['hemoglobin', 'hematocrit', 'leokocyte', 'erythrocyte', 'reticulocyte', 'platelet', 'esr', 'bleeding_time', 'clotting_time', 'bands', 'segmenters', 'eosinophil', 'basophil', 'lymphocytes', 'monocytes', 'nucleated_rbc', 'malarial_smear', 'toxic_granulation', 'blood_rh_type', 'others', 'status'], 'safe'],
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
        $query = Hematology::find();

        if (Yii::$app->user->identity->role->name == 'Patient') {
            $query = Hematology::find()
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
            'staff_id' => $this->staff_id,
        ]);

        $query->andFilterWhere(['like', 'hemoglobin', $this->hemoglobin])
            ->andFilterWhere(['like', 'hematocrit', $this->hematocrit])
            ->andFilterWhere(['like', 'leokocyte', $this->leokocyte])
            ->andFilterWhere(['like', 'erythrocyte', $this->erythrocyte])
            ->andFilterWhere(['like', 'reticulocyte', $this->reticulocyte])
            ->andFilterWhere(['like', 'platelet', $this->platelet])
            ->andFilterWhere(['like', 'esr', $this->esr])
            ->andFilterWhere(['like', 'bleeding_time', $this->bleeding_time])
            ->andFilterWhere(['like', 'clotting_time', $this->clotting_time])
            ->andFilterWhere(['like', 'bands', $this->bands])
            ->andFilterWhere(['like', 'segmenters', $this->segmenters])
            ->andFilterWhere(['like', 'eosinophil', $this->eosinophil])
            ->andFilterWhere(['like', 'basophil', $this->basophil])
            ->andFilterWhere(['like', 'lymphocytes', $this->lymphocytes])
            ->andFilterWhere(['like', 'monocytes', $this->monocytes])
            ->andFilterWhere(['like', 'nucleated_rbc', $this->nucleated_rbc])
            ->andFilterWhere(['like', 'malarial_smear', $this->malarial_smear])
            ->andFilterWhere(['like', 'toxic_granulation', $this->toxic_granulation])
            ->andFilterWhere(['like', 'blood_rh_type', $this->blood_rh_type])
            ->andFilterWhere(['like', 'others', $this->others])
            ->andFilterWhere(['like', 'status', $this->status]);
            
        $query->groupBy('patient_id');
        $query->orderBy('id', SORT_DESC);

        return $dataProvider;
    }

    public static function records($id)
    {
        $records = Hematology::find()
            ->where(['patient_id' => $id])
            ->orderBy(['date_created' => SORT_DESC])
            ->all();

        return  [
            'title' => 'Hematology',
            'total' => $records ? count($records) : 0,
            'last' => $records ? date('F d, Y', strtotime($records[0]['date_created'])): ''
        ];
    }
    
    public static function totalPatient()
    {
        $records = Hematology::find()
            ->select('DISTINCT(patient_id)') 
            ->where(['YEAR(date_created)' => date('Y')])
            ->all(); 
            
        return count($records); 
    }
    
    public static function byMonth($month)
    {
        $total = Hematology::find()
            ->where(['MONTH(date_created)' => $month, 'YEAR(date_created)' => date('Y')])
            ->all();


        return count($total);
    }
}
