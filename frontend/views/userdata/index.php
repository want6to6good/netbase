<?php
/**
 * team:你说的队，NKU
 * Coding by zhujingbo 2111451,20240119
 * view
 */
use frontend\models\Userdata;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\UserdataSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = '用户信息';// 设置页面标题
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userdata-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('修改用户信息', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'selfsign:ntext',
        ],
    ]); ?>


</div>
