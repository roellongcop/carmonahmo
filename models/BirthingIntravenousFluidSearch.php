<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\BirthingIntravenousFluid;

/**
 * BirthingIntravenousFluidSearch represents the model behind the search form of `app\models\BirthingIntravenousFluid`.
 */
class BirthingIntravenousFluidSearch extends BirthingIntravenousFluid
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'birthing_id', 'bag_no'], 'integer'],
            [['date', 'solution', 'blood', 'time_started', 'time_end', 'remarks', 'status'], 'safe'],
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
        $query = BirthingIntravenousFluid::find();

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
            'birthing_id' => $this->birthing_id,
            'date' => $this->date,
            'bag_no' => $this->bag_no,
            'time_started' => $this->time_started,
            'time_end' => $this->time_end,
        ]);

        $query->andFilterWhere(['like', 'solution', $this->solution])
            ->andFilterWhere(['like', 'blood', $this->blood])
            ->andFilterWhere(['like', 'remarks', $this->remarks])
            ->andFilterWhere(['like', 'status', $this->status]);

        if (Yii::$app->user->identity->role->name == 'Patient') {
            $query->andFilterWhere([
                'b.patient_id' => Yii::$app->user->identity->id,
            ]);

            
        }
        $query->innerJoinWith('birthing b');
        $query->groupBy('b.patient_id');
        $query->orderBy('id', SORT_DESC);
        
        return $dataProvider;
    }

    public static function records($id)
    {
        $records = BirthingIntravenousFluid::find()
            ->alias('ba')
            ->innerJoinWith('birthing b')
            ->where(['b.patient_id' => $id])
            ->orderBy(['ba.date' => SORT_DESC])
            ->all();

        return  [
            'title' => 'Birthing Intravenous Fluid',
            'total' => $records ? count($records) : 0,
            'last' => $records ? date('F d, Y', strtotime($records[0]['date'])): ''
        ];
    }
}
