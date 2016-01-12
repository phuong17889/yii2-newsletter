<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\EventNewsletterTemplate */

$this->title = 'Create Event Newsletter Template';
$this->params['breadcrumbs'][] = ['label' => 'Event Newsletter Templates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="event-newsletter-template-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
