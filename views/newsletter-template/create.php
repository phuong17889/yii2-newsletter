<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\NewsletterTemplate */

$this->title = 'Create Newsletter Template';
$this->params['breadcrumbs'][] = ['label' => 'Newsletter Templates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="newsletter-template-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
