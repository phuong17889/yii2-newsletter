<?php

namespace saurabhd\newsletter\models;

use Yii;
use yii\helpers\ArrayHelper;
/**
 * This is the model class for table "event_newsletter_template".
 *
 * @property integer $id
 * @property integer $eventid
 * @property integer $newsletterid
 */
class EventNewsletterTemplate extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'event_newsletter_template';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['eventid', 'newsletterid'], 'required'],
            [['eventid', 'newsletterid'], 'integer'],
            ['eventid', function($attribute) {
                if($this->eventid !== null) {
                    $query = EventNewsletterTemplate::find()->where(['eventid'=>$this->eventid])->All();
                    if(!empty($query)) {
                        $this->addError($attribute,'This EVent Has Already Assigned a Template..');
                    }
                }
            }]
        ];
    }
    
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'eventid' => 'Eventid',
            'newsletterid' => 'Newsletterid',
        ];
    }

    public function fetchEvent() 
    {
        $model = EventTemplate::find()->all();
        $listData = ArrayHelper::map($model,'id','event');
        return $listData;
    }

    public function fetchNewsletter() 
    {
        $model = NewsletterTemplate::find()->all();
        $listData = ArrayHelper::map($model,'id','title');
        return $listData;
    }

    public function getEventTemplate()
    {
        return $this->hasOne(EventTemplate::className(), ['id' => 'eventid']);
    }

    public function getNewsletterTemplate()
    {
        return $this->hasOne(NewsletterTemplate::className(), ['id' => 'newsletterid']);
    }
}
