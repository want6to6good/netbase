<?php
/**
 * team:你说的队，NKU
 * Coding by zhanglinhao 2113976,20240119
 * view
 */
use backend\models\Contect;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\ContectSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */
/**
 * 用于显示和管理 Contect 模型的数据
 */
$this->title = '意见';
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    body{background:url(img/联系我们.jpg)no-repeat fixed;background-size:cover;}
</style>
<div class="contect-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

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


</div>
