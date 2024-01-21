<?php
/**
 * team:你说的队，NKU
 * Coding by zhanglinhao 2113976,20240119
 * view
 */
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Board $model */

$this->title = 'Update Board: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Boards', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="board-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
