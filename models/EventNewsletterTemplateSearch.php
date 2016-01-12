<?php

namespace saurabhd\newsletter\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use saurabhd\newsletter\models\EventNewsletterTemplate;

/**
 * NewsletterTemplateSearch represents the model behind the search form about `app\models\NewsletterTemplate`.
 */
class EventNewsletterTemplateSearch extends EventNewsletterTemplate
{
    public $eventTemplate;
    public $newsletterTemplate;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['eventid', 'newsletterid'], 'safe'],
            [['eventTemplate', 'newsletterTemplate'], 'safe'],
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
        $query = EventNewsletterTemplate::find();
        $query->joinWith(['eventTemplate', 'newsletterTemplate']);

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
            'event_newsletter_template.id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'event_template.event', $this->eventid])
            ->andFilterWhere(['like', 'newsletter_template.title', $this->newsletterid]);

        return $dataProvider;
    }
}
