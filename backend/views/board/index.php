<?php
/**
 * team:你说的队，NKU
 * Coding by zhanglinhao 2113976,20240119
 * view
 */
use backend\models\Board;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\BoardSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */
/**
 * 用于显示和管理 Board 模型的数据
 */
$this->title = '留言板';
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    body{background:url(img/留言板背景.jpg)no-repeat fixed;background-size:cover;}
</style>
<div class="board-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('留言', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'content:ntext',
            'date',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Board $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
