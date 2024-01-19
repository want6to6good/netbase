<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Userdata $model */

$this->title = 'Update Userdata: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Userdatas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="userdata-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
