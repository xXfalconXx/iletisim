<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model kouosl\iletisim\models\Iletisims */

$this->title = 'Create Iletisims';
$this->params['breadcrumbs'][] = ['label' => 'Iletisims', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="iletisims-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
