<?php
?>
<style>
    body{background:url(img/留言板背景.jpg)no-repeat fixed;background-size:cover;}
</style>
<?php
use frontend\models\Board;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\BoardSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = '留言板';// 设置页面标题
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="board-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <!--
        <p>
        <?= Html::a('Create Board', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
-->
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <!--<?= GridView::widget([
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
    ]); ?>-->
    <div class="jumbotron text-center bg-transparent"style="float: middle">
        <p>分享你的看法<p>
        <p>
        <?= Html::a('我要留言', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    </div>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
    ]); ?>

</div>