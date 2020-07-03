<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DotsTbTreatment;

/**
 * DotsTbTreatmentSearch represents the model behind the search form of `app\models\DotsTbTreatment`.
 */
class DotsTbTreatmentSearch extends DotsTbTreatment
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'dots_id', 'tb_case_number'], 'integer'],
            [['region', 'name_of_dots_facility', 'bcg_scar', 'other_patient_details', 'diagnostic_test', 'diagnosis', 'history_of_anti_tb_drug_intake', 'bacteriological_status', 'classification_of_tb_disease', 'registeration_group', 'treatment_started', 'treatment_outcome', 'clinical_examination_before_and_during_treatment', 'dosage_and_preperation'], 'safe'],
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
        $query = DotsTbTreatment::find();

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
            'tb_case_number' => $this->tb_case_number,
        ]);

        $query->andFilterWhere(['like', 'region', $this->region])
            ->andFilterWhere(['like', 'name_of_dots_facility', $this->name_of_dots_facility])
            ->andFilterWhere(['like', 'bcg_scar', $this->bcg_scar])
            ->andFilterWhere(['like', 'other_patient_details', $this->other_patient_details])
            ->andFilterWhere(['like', 'diagnostic_test', $this->diagnostic_test])
            ->andFilterWhere(['like', 'diagnosis', $this->diagnosis])
            ->andFilterWhere(['like', 'history_of_anti_tb_drug_intake', $this->history_of_anti_tb_drug_intake])
            ->andFilterWhere(['like', 'bacteriological_status', $this->bacteriological_status])
            ->andFilterWhere(['like', 'classification_of_tb_disease', $this->classification_of_tb_disease])
            ->andFilterWhere(['like', 'registeration_group', $this->registeration_group])
            ->andFilterWhere(['like', 'treatment_started', $this->treatment_started])
            ->andFilterWhere(['like', 'treatment_outcome', $this->treatment_outcome])
            ->andFilterWhere(['like', 'clinical_examination_before_and_during_treatment', $this->clinical_examination_before_and_during_treatment])
            ->andFilterWhere(['like', 'dosage_and_preperation', $this->dosage_and_preperation]);

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
        $records = DotsTbTreatment::find()
            ->alias('dt')
            ->innerJoinWith('dots d')
            ->where(['d.patient_id' => $id])
            ->orderBy(['dt.treatment_started' => SORT_DESC])
            ->all();

        return  [
            'title' => 'TB Treatment Records',
            'total' => $records ? count($records) : 0,
            'last' => $records ? date('F d, Y', strtotime($records[0]['treatment_started'])): ''
        ];
    }
}
