<?php

namespace saurabhd\newsletter\models;

use Yii;

/**
 * This is the model class for table "newsletter_template".
 *
 * @property integer $id
 * @property string $title
 * @property string $code
 * @property string $message
 * @property string $variale_info
 */
class NewsletterTemplate extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'newsletter_template';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'code', 'message', 'variable_info'], 'required'],
            [['title', 'variable_info'], 'string', 'max' => 255],
            [['code'], 'string', 'max' => 30],
            [['status'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'code' => 'Code',
            'message' => 'Message',
            'variable_info' => 'Variable Info',
            'status' => 'Status',
        ];
    }
}
