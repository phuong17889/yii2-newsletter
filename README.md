# yii2-newsletter
Purpose:-
-> As we all use email templates into website; here's the best solution which we all can try and can have easy outcomes.
-> This module is used for creating a dynamic email template for different events like REGISTRATION, FORGOT PASSWORD, LOGIN, etc.
-> If there are any changes into template's content then website Admin have to goto the developer to change the content. By using this website 
-> Admin can manage the content by themselves.
-> It would provide a feel of using CMS.
-> Newsletter template also have a Active-Inactive facility for enable or disable template.

Benefit:-
-> Non technical users can also use it.
-> Reduces production time.

Requirements:-
-> Yii 2.0

steps for installlation:-

1) Download file and unzip it into your application's vendor folder.

2) Add below code in your "vendor\yiisoft\extensions.php file.

        'saurabhd/yii2-newsletter' =>
          array (
           'name' => 'saurabhd/yii2-newsletter',
           'version' => '9999999-dev',
           'alias' => array ('@saurabhd/newsletter' => $vendorDir . '/saurabhd/yii2-newsletter'),
        ),

3) Add this code in module section of "config\main.php" file.
        'newsletter' => [
          'class' => 'saurabhd\newsletter\Module',
        ],

4) Add this code in component section of "config\main.php" file.
        'tools' => [
          'class' => 'saurabhd\newsletter\components\Tools',
        ],

5) Go to the project root directory and run this command in terminal:- 
        $ php yii migrate --migrationPath=@vendor/saurabhd/yii2-newsletter/migrations
				OR
        $ yii migrate --migrationPath=@vendor/saurabhd/yii2-newsletter/migrations

6) Add these code for menu control in 'views\layouts\main.php':-
<?php 
        $menuItems[] =[
            'label' => 'Event',
            'url' => ['/newsletter/event-template']];
        
        $menuItems[] =[
            'label' => 'Newsletter',
            'url' => ['/newsletter/newsletter-template']];

        $menuItems[] =[
            'label' => 'eventNewsletter',
            'url' => ['/newsletter/event-newsletter-template']];	
?>

7) Use as the following where you want to send email:-
In Controller,
<?php 
        // arrParams array contains eventtype same as the event_template table event type
        // repacement array used for variables which you want to replace dynamically from your content
        $arrParams = array('eventtype' => 'FORGOT_PASSWORD',   //event-type same as event_template table field
               'replacement' => array('##USERNAME##' => 'testUser',
                                      '##USEREMAIL##' => 'testUser@gmail.com',
                                       -----------------
        ));

        $emaildetails = Yii::$app->tools->getTemplateDetails($arrParams); //call the getTemplateDetails function of Tools component of emailtemplate module 

        if(!empty($emaildetails)) {
            $subject = $emaildetails['subject'];
            $view = $emaildetails['view'];
            $user = 'testUser@gmail.com';
        }
        else {
          //put your deafult code of the email parameters   
        }
  
