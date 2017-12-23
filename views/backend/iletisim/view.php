<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model kouosl\iletisim\models\Iletisims */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Iletisims', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="iletisims-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'mail',
            'konu',
            'mesaj:ntext',
            'tarih',
            'isim_soyisim',
            'id',
        ],
    ]) ?>

</div>
