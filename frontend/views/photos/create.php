<?php
/**
 * team:你说的队，NKU
 * Coding by miyilin 2111566,20240119
 * view
 */
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Photos $model */

$this->title = 'Create Photos';
$this->params['breadcrumbs'][] = ['label' => 'Photos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="photos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
