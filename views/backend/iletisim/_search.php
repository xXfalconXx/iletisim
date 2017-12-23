<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kouosl\iletisim\models\IletisimsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="iletisims-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'mail') ?>

    <?= $form->field($model, 'konu') ?>

    <?= $form->field($model, 'mesaj') ?>

    <?= $form->field($model, 'tarih') ?>

    <?= $form->field($model, 'isim_soyisim') ?>

    <?php // echo $form->field($model, 'id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
