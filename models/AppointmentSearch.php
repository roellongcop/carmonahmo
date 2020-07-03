<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Appointment;

/**
 * AppointmentSearch represents the model behind the search form of `app\models\Appointment`.
 */
class AppointmentSearch extends Appointment
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'complaint_id'], 'integer'],
            [['scheduled_date', 'description', 'status'], 'safe'],
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
        if (Yii::$app->user->identity->role->name == 'Patient') {
            $query = Appointment::find()->where(['user_id' => Yii::$app->user->identity->id]);
        } else {
            $query = Appointment::find();
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
            'user_id' => $this->user_id,
            'complaint_id' => $this->complaint_id,
            'scheduled_date' => $this->scheduled_date,
        ]);

        $query->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'status', $this->status]);
             

        return $dataProvider;
    }

    




    public static function maximum($model)
    {
        $appointment = Appointment::find()
            ->where(['status' => 1, 'scheduled_date' => date('Y-m-d', strtotime($model->scheduled_date))])
            ->count();

        if (($appointment) && $appointment >= 1) {
            return true;
        }

        return false;
    }


    public static function oneWeek($user_id)
    {
        $appointment = Appointment::find()
            ->where(['user_id' => $user_id])
            ->orderBy('id', SORT_DESC)
            ->one();

        if ($appointment) {

            $date = date('Y-m-d H:i:s', (strtotime($appointment->date_created . '+7days') ));

            if ($date >= date('Y-m-d H:i:s')) {
                return true;
            }
        }

        return false;

    }


    public static function hasNoPending($user_id)
    {
        $appointment = Appointment::findOne([
            'user_id' => $user_id,
            'status' => 0,
        ]);


        if (empty($appointment)) {
           return true;
        }

       return false;
    }


    public static function chart($user_id = "")
    {
        $user_id = ($user_id === "") ? Yii::$app->user->identity->id : $user_id;

        return Appointment::find()
            ->alias('a')
            ->select('a.complaint_id, COUNT(*) AS total, c.name')
            ->where(['user_id' => $user_id])
            ->groupBy('complaint_id')
            ->innerJoinWith('complaint c')
            ->asArray()
            ->all();
    }

    public static function pending()
    {
        return Appointment::find()
            ->where(['status' => 0])
            ->all();
    }


    public function byMonth($month)
    {
        $total = Appointment::find()
            ->where(['MONTH(scheduled_date)' => $month, 'status' => 3])
            ->all();


        return count($total);
    }


    public static function byUser($user_id = "")
    {
        $user_id = ($user_id === "") ? Yii::$app->user->identity->id : $user_id;

        return Appointment::find()
            ->where(['user_id' => $user_id])
            ->all();
    }

    
}
