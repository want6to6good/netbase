<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Loginlog $model */

$this->title = 'Update Loginlog: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Loginlogs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="loginlog-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
