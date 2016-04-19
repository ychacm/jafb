<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Urlsort */

$this->title = 'Update Urlsort: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Urlsorts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->urlsortID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="urlsort-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
