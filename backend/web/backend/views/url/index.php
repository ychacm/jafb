<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UrlSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Urls';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="url-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Url', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'urlID:url',
            'name',
            'typeID',
            'urlsortID:url',
            'url:url',
            // 'image',
            // 'title',
            // 'number',
            // 'ord',
            // 'id',
            // 'intro:ntext',
            // 'sar_id',
            // 'isdis',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
