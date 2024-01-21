<?php
/**
 * team:你说的队，NKU
 * Coding by zhanglinhao 2113976,20240119
 * view
 */
use frontend\models\News;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\NewsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = '新闻';// 设置页面标题
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    body{background:url(img/新闻.jpg)no-repeat fixed;background-size:cover;}
</style>
<div class="news-index">

    <h1><?= Html::encode($this->title) ?></h1>
<!--
    <p>
        <?= Html::a('Create News', ['create'], ['class' => 'btn btn-success']) ?>
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
            'title',
            'url:url',
        ],
    ]); ?>


</div>
