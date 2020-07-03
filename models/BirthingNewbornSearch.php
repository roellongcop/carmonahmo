<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\BirthingNewborn;

/**
 * BirthingNewbornSearch represents the model behind the search form of `app\models\BirthingNewborn`.
 */
class BirthingNewbornSearch extends BirthingNewborn
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'birthing_id'], 'integer'],
            [['baby_name', 'date_delivered', 'time_delivered', 'gender', 'delivery_type', 'weight', 'apgar_score', 'head_circumference', 'abdominal_circumference', 'chest_circumference', 'body_length', 'procedures', 'medications', 'remarks', 'status'], 'safe'],
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
        $query = BirthingNewborn::find();

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
            'date_delivered' => $this->date_delivered,
            'time_delivered' => $this->time_delivered,
        ]);

        $query->andFilterWhere(['like', 'baby_name', $this->baby_name])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'delivery_type', $this->delivery_type])
            ->andFilterWhere(['like', 'weight', $this->weight])
            ->andFilterWhere(['like', 'apgar_score', $this->apgar_score])
            ->andFilterWhere(['like', 'head_circumference', $this->head_circumference])
            ->andFilterWhere(['like', 'abdominal_circumference', $this->abdominal_circumference])
            ->andFilterWhere(['like', 'chest_circumference', $this->chest_circumference])
            ->andFilterWhere(['like', 'body_length', $this->body_length])
            ->andFilterWhere(['like', 'procedures', $this->procedures])
            ->andFilterWhere(['like', 'medications', $this->medications])
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
        $records = BirthingNewborn::find()
            ->alias('ba')
            ->innerJoinWith('birthing b')
            ->where(['b.patient_id' => $id])
            ->orderBy(['ba.date_delivered' => SORT_DESC])
            ->all();

        return  [
            'title' => 'Newborn Babies',
            'total' => $records ? count($records) : 0,
            'last' => $records ? date('F d, Y', strtotime($records[0]['date_delivered'])): ''
        ];
    }
}
