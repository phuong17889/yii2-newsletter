<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EventNewsletterTemplate */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="event-newsletter-template-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'eventid')->dropDownList($model->fetchEvent(),['prompt' => '---SELECT---']) ?>

    <?= $form->field($model, 'newsletterid')->dropDownList($model->fetchNewsletter(),['prompt' => '---SELECT---']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
