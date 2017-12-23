<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel kouosl\iletisim\models\IletisimsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Iletisims';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="iletisims-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Iletisims', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'mail',
            'konu',
            'mesaj:ntext',
            'tarih',
            'isim_soyisim',
            //'id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
