<?php

namespace saurabhd\newsletter\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use saurabhd\newsletter\models\NewsletterTemplate;

/**
 * NewsletterTemplateSearch represents the model behind the search form about `app\models\NewsletterTemplate`.
 */
class NewsletterTemplateSearch extends NewsletterTemplate
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['title', 'code', 'message', 'variable_info'], 'safe'],
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
        $query = NewsletterTemplate::find();

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

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'code', $this->code])
            ->andFilterWhere(['like', 'message', $this->message])
            ->andFilterWhere(['like', 'variable_info', $this->variable_info]);

        return $dataProvider;
    }
}
