<?php
/**
 * team:你说的队，NKU
 * Coding by miyilin 2111566,20240119
 * view
 */
use backend\models\Loginlog;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\LoginlogSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */
/**
 * 用于显示和管理 Loginlog 模型的数据
 */
$this->title = '登陆记录';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="loginlog-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'date',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Loginlog $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
