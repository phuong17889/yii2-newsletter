<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\NewsletterTemplate */

$this->title = 'Update Newsletter Template: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Newsletter Templates', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="newsletter-template-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
