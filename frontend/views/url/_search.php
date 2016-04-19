<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\UrlSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="url-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'urlID') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'typeID') ?>

    <?= $form->field($model, 'urlsortID') ?>

    <?= $form->field($model, 'url') ?>

    <?php // echo $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'title') ?>

    <?php // echo $form->field($model, 'number') ?>

    <?php // echo $form->field($model, 'ord') ?>

    <?php // echo $form->field($model, 'id') ?>

    <?php // echo $form->field($model, 'intro') ?>

    <?php // echo $form->field($model, 'sar_id') ?>

    <?php // echo $form->field($model, 'isdis') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
