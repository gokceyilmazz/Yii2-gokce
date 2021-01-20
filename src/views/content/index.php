<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $searchModel gokceyilmazz\content\models\ContentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ödevler';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Ödev Oluştur', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?=Html::beginForm(['done'],'post');?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'body',
            'created_at',
            'updated_at',

            ['class' => 'yii\grid\CheckboxColumn',],
            ['class' => 'yii\grid\ActionColumn'],



        ],
    ]); ?>

    <?=Html::submitButton('Yapıldı olarak işaretle', ['class' => 'btn btn-info',]);?>
    <?= Html::endForm();?>
</div>

