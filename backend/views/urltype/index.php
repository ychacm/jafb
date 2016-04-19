<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UrltypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Urltypes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="urltype-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Urltype', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'urltypeID:url',
            'name',
            'jc',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
