<?php

use frontend\models\Contect;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\ContectSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = '联系我们';// 设置页面标题
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    body{background:url(img/联系我们.jpg)no-repeat fixed;background-size:cover;}
</style>
<div class="contect-index">

    <h1><?= Html::encode($this->title) ?></h1>
<!--
    <p>
        <?= Html::a('Create Contect', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
-->
<div class="jumbotron text-center bg-transparent"style="float: middle">
        <p>请分享你的想法<p>
        <p>
        <?= Html::a('我要提意见', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    </div>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
<!--
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'mail',
            'content:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Contect $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>
-->

</div>
