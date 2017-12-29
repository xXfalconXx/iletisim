<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kouosl\iletisim\models\Iletisims */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="iletisims-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'mail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'konu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mesaj')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tarih')->textInput() ?>

    <?= $form->field($model, 'isim_soyisim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>