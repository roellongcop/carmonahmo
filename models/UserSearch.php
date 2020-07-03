<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\User;
use yii\helpers\ArrayHelper;

/**
 * UserSearch represents the model behind the search form of `app\models\User`.
 */
class UserSearch extends User
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['username', 'password', 'user', 'accessToken', 'authKey'], 'safe'],
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
    public function search($params, $pagesize = 100)
    {
        $query = User::find()->where(['status' => 0]);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => [
                'defaultOrder' => [
                    'id' => SORT_DESC
                ]
            ],
            'pagination' => [
                'pageSize' => $pagesize
            ]
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

        $query->andFilterWhere(['like', 'username', $this->username])
            // ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'user_type', $this->user_type])
            // ->andFilterWhere(['like', 'accessToken', $this->accessToken])
            ->andFilterWhere(['like', 'authKey', $this->authKey]);

        return $dataProvider;
    }


    public static function all($field, $value)
    {
        return User::find()
            ->where([$field => $value])
            ->all();
    }

    public static function dropDown($type = "false")
    {
        if ($type === "") {
            $dropdown = User::find()
                ->where(['status' => 0])
                ->orderBy('fullname', SORT_ASC)
                ->all();
        } elseif ($type == "patient") {
            $dropdown = User::find()
                ->where(['status' => 0, 'user_type' => 0])
                ->orderBy('fullname', SORT_ASC)
                ->all();
        } elseif ($type == "birthing") {
            $dropdown = User::find()
                ->where(['status' => 0, 'user_type' => 0, 'gender' => 2])
                ->orderBy('fullname', SORT_ASC)
                ->all();
        } else {
            $dropdown = User::find()
                ->where('status = 0 AND user_type != 0')
                ->orderBy('fullname', SORT_ASC)
                ->all();
        }
        

        $dropdown = ArrayHelper::map($dropdown, 'id' , 'name');

        return $dropdown;
    }


    public static function patient()
    {
        return User::find()
            ->where(['user_type' => 0])
            ->all();
    }

    public static function staff()
    {
        return User::find()
            ->where('user_type = 1 OR user_type = 2')
            ->all();
    }

   
}
