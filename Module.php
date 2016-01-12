<?php

namespace saurabhd\newsletter;
use Yii;
use yii\base\Module as BaseModule;

class Module extends BaseModule
{
    const VERSION = '2.0.0';
    public $controllerNamespace = 'saurabhd\newsletter\controllers';

    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
