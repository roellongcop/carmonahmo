<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Fecalysis;

/**
 * FecalysisSearch represents the model behind the search form of `app\models\Fecalysis`.
 */
class FecalysisSearch extends Fecalysis
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'patient_id', 'staff_id'], 'integer'],
            [['color', 'consistency', 'pus_cells', 'red_cells', 'fat_globules', 'yeast_cells', 'bateria', 'starch_granules', 'muscle_fiber', 'vegetable_cells', 'parasite', 'amoeba', 'others', 'status'], 'safe'],
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
        $query = Fecalysis::find();

        if (Yii::$app->user->identity->role->name == 'Patient') {
            $query = Fecalysis::find()
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

        $query->andFilterWhere(['like', 'color', $this->color])
            ->andFilterWhere(['like', 'consistency', $this->consistency])
            ->andFilterWhere(['like', 'pus_cells', $this->pus_cells])
            ->andFilterWhere(['like', 'red_cells', $this->red_cells])
            ->andFilterWhere(['like', 'fat_globules', $this->fat_globules])
            ->andFilterWhere(['like', 'yeast_cells', $this->yeast_cells])
            ->andFilterWhere(['like', 'bateria', $this->bateria])
            ->andFilterWhere(['like', 'starch_granules', $this->starch_granules])
            ->andFilterWhere(['like', 'muscle_fiber', $this->muscle_fiber])
            ->andFilterWhere(['like', 'vegetable_cells', $this->vegetable_cells])
            ->andFilterWhere(['like', 'parasite', $this->parasite])
            ->andFilterWhere(['like', 'amoeba', $this->amoeba])
            ->andFilterWhere(['like', 'others', $this->others])
            ->andFilterWhere(['like', 'status', $this->status]);
        
        $query->groupBy('patient_id');
        $query->orderBy('id', SORT_DESC);

        return $dataProvider;
    }

    public static function records($id)
    {
        $records = Fecalysis::find()
            ->where(['patient_id' => $id])
            ->orderBy(['date_created' => SORT_DESC])
            ->all();

        return  [
            'title' => 'Fecalysis',
            'total' => $records ? count($records) : 0,
            'last' => $records ? date('F d, Y', strtotime($records[0]['date_created'])): ''
        ];
    }
    
    public static function totalPatient()
    {
        $records = Fecalysis::find()
            ->select('DISTINCT(patient_id)') 
            ->where(['YEAR(date_created)' => date('Y')])
            ->all(); 
            
        return count($records); 
    }
    
    public static function byMonth($month)
    {
        $total = Fecalysis::find()
            ->where(['MONTH(date_created)' => $month, 'YEAR(date_created)' => date('Y')])
            ->all();


        return count($total);
    }
}
