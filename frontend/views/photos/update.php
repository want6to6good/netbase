<?php
/**
 * team:你说的队，NKU
 * Coding by miyilin 2111566,20240119
 * view
 */
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Photos $model */

$this->title = 'Update Photos: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Photos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="photos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
