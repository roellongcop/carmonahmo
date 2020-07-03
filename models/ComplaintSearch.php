<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Complaint;
use yii\helpers\ArrayHelper;

/**
 * ComplaintSearch represents the model behind the search form of `app\models\Complaint`.
 */
class ComplaintSearch extends Complaint
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['name', 'description', 'department', 'status'], 'safe'],
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
        $query = Complaint::find();

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
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }

    public static function all()
    {
        return Complaint::find()->all();
    }

    public static function dropDown()
    {
        $dropdown = Complaint::find()
            ->where(['status' => 0])
            ->orderBy('name', SORT_ASC)
            ->all();

        $dropdown = ArrayHelper::map($dropdown, 'id' , 'name');

        return $dropdown;
    }
}
