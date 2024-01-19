<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Contect $model */

$this->title = 'Create Contect';
$this->params['breadcrumbs'][] = ['label' => 'Contects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contect-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
