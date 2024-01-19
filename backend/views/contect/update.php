<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Contect $model */

$this->title = 'Update Contect: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Contects', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="contect-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
