<?php

namespace saurabhd\newsletter\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use saurabhd\newsletter\models\EventTemplate;

/**
 * NewsletterTemplateSearch represents the model behind the search form about `app\models\NewsletterTemplate`.
 */
class EventTemplateSearch extends EventTemplate
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['event'], 'safe'],
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
        $query = EventTemplate::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'event', $this->event]);
        return $dataProvider;
    }
}
