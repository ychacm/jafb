<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Urlsort */

$this->title = 'Create Urlsort';
$this->params['breadcrumbs'][] = ['label' => 'Urlsorts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="urlsort-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
