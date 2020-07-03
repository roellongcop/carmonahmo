<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Urinalysis;

/**
 * UrinalysisSearch represents the model behind the search form of `app\models\Urinalysis`.
 */
class UrinalysisSearch extends Urinalysis
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'patient_id', 'staff_id', 'pathologist_id'], 'integer'],
            [['color', 'reaction', 'transparency', 'specific_gravity', 'albumin', 'sugar', 'ketone', 'amorphus_urates', 'amorphus_phosphates', 'calcium_oxalates', 'uric_acid', 'triple_phosphates', 'hyaline', 'fine_granular', 'coarse_granular', 'wbc_casts', 'rbc_casts', 'waxy', 'pus_cells', 'red_blood_cells', 'ephithelial_cells', 'yeast_cells', 'renal_ephithelial_cells', 'mocous_threads', 'bacteria', 'pregnancy_test', 'status'], 'safe'],
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
        $query = Urinalysis::find();

        if (Yii::$app->user->identity->role->name == 'Patient') {
            $query = Urinalysis::find()
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
            'pathologist_id' => $this->pathologist_id,
        ]);

        $query->andFilterWhere(['like', 'color', $this->color])
            ->andFilterWhere(['like', 'reaction', $this->reaction])
            ->andFilterWhere(['like', 'transparency', $this->transparency])
            ->andFilterWhere(['like', 'specific_gravity', $this->specific_gravity])
            ->andFilterWhere(['like', 'albumin', $this->albumin])
            ->andFilterWhere(['like', 'sugar', $this->sugar])
            ->andFilterWhere(['like', 'ketone', $this->ketone])
            ->andFilterWhere(['like', 'amorphus_urates', $this->amorphus_urates])
            ->andFilterWhere(['like', 'amorphus_phosphates', $this->amorphus_phosphates])
            ->andFilterWhere(['like', 'calcium_oxalates', $this->calcium_oxalates])
            ->andFilterWhere(['like', 'uric_acid', $this->uric_acid])
            ->andFilterWhere(['like', 'triple_phosphates', $this->triple_phosphates])
            ->andFilterWhere(['like', 'hyaline', $this->hyaline])
            ->andFilterWhere(['like', 'fine_granular', $this->fine_granular])
            ->andFilterWhere(['like', 'coarse_granular', $this->coarse_granular])
            ->andFilterWhere(['like', 'wbc_casts', $this->wbc_casts])
            ->andFilterWhere(['like', 'rbc_casts', $this->rbc_casts])
            ->andFilterWhere(['like', 'waxy', $this->waxy])
            ->andFilterWhere(['like', 'pus_cells', $this->pus_cells])
            ->andFilterWhere(['like', 'red_blood_cells', $this->red_blood_cells])
            ->andFilterWhere(['like', 'ephithelial_cells', $this->ephithelial_cells])
            ->andFilterWhere(['like', 'yeast_cells', $this->yeast_cells])
            ->andFilterWhere(['like', 'renal_ephithelial_cells', $this->renal_ephithelial_cells])
            ->andFilterWhere(['like', 'mocous_threads', $this->mocous_threads])
            ->andFilterWhere(['like', 'bacteria', $this->bacteria])
            ->andFilterWhere(['like', 'pregnancy_test', $this->pregnancy_test])
            ->andFilterWhere(['like', 'status', $this->status]);
        
        $query->groupBy('patient_id');
        $query->orderBy('id', SORT_DESC);

        return $dataProvider;
    }

    public static function records($id)
    {
        $records = Urinalysis::find()
            ->where(['patient_id' => $id])
            ->orderBy(['date_created' => SORT_DESC])
            ->all();

        return  [
            'title' => 'Urinalysis',
            'total' => $records ? count($records) : 0,
            'last' => $records ? date('F d, Y', strtotime($records[0]['date_created'])): ''
        ];
    }
    
    public static function totalPatient()
    {
        $records = Urinalysis::find()
            ->select('DISTINCT(patient_id)') 
            ->where(['YEAR(date_created)' => date('Y')])
            ->all(); 
            
        return count($records); 
    }
    
    public static function byMonth($month)
    {
        $total = Urinalysis::find()
            ->where(['MONTH(date_created)' => $month, 'YEAR(date_created)' => date('Y')])
            ->all();


        return count($total);
    }
}
