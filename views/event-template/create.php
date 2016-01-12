<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\EventTemplate */

$this->title = 'Create Event Template';
$this->params['breadcrumbs'][] = ['label' => 'Event Templates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="event-template-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
