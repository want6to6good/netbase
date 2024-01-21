<?php
/**
 * team:你说的队，NKU
 * Coding by zhanglinhao 2113976,20240119
 * view
 */
use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Board $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Boards', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="board-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        留言成功!
        </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'content:ntext',
            'date',
        ],
    ]) ?>

</div>
