<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\NewsletterTemplateSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Newsletter Templates';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="newsletter-template-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Newsletter Template', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'code',
            'message',
            'variable_info',
            [
                'attribute'=>'status',
                'content' => function ($data) {
                    if ($data->status == "Y") 
                    {
                        $url = "newsletter-template/changestatus";
                        return Html::a('Active', [$url , 'id' =>$data->id]);
                    } 
                    else
                    {   
                        $url = "newsletter-template/changestatus";
                        return Html::a('InActive', [$url ,'id' =>$data->id]);
                    }
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
