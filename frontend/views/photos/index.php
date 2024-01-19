<?php

use frontend\models\Photos;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PhotosSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = '图片';
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    body{background:url(img/图片.jpg)no-repeat fixed;background-size:cover;}
</style>
<div class="photos-index">

    <h1><?= Html::encode($this->title) ?></h1>
<!--
    <p>
        <?= Html::a('Create Photos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
-->
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'date',
            'title:ntext',
            'url:url',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Photos $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
