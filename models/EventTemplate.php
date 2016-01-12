<?php

namespace saurabhd\newsletter\models;
use Yii;

/**
 * This is the model class for table "event_template".
 *
 * @property integer $id
 * @property string $event
 */
class EventTemplate extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'event_template';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['event'], 'required'],
            [['event'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'event' => 'Event',
        ];
    }
}
