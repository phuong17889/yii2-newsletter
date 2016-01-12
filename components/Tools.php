<?php  
namespace saurabhd\newsletter\components;

use Yii;
use yii\base\Component;
use saurabhd\newsletter\models\EventTemplate;
use saurabhd\newsletter\models\EventNewsletterTemplate;
use saurabhd\newsletter\models\NewsletterTemplate;

class Tools extends Component
{
 public function getTemplateDetails($arrParams) 
    {
        $emaildetails = array();
        $event = EventTemplate::find()->where(['event' => $arrParams['eventtype']])->one();

        if(!empty($event)) {
          $eventid = $event['id'];
          $mapping = EventNewsletterTemplate::find()->where(['eventid' => $eventid])->one();
          if(!empty($mapping)) {
              $newsletterid = $mapping['newsletterid'];
              $template = NewsletterTemplate::find()->where(['id' => $newsletterid , 'status' => 'Y'])->one();
              if(!empty($template)) {
                  $subject = $template['title'];
                  $view = $template['message'];

                  foreach($arrParams['replacement'] as $strKey => $strValue) {
                    $view = str_replace($strKey, $strValue, $view);
                  }
              }
              else {
                    return $emaildetails;
              }
              $emaildetails = array('subject' => $subject,
                                    'view' => $view);
              return $emaildetails;
          }
          else {
            return $emaildetails;
          }
        }
        else {
          return $emaildetails;
        }
    }
 
}