<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Loginlog $model */

$this->title = 'Create Loginlog';
$this->params['breadcrumbs'][] = ['label' => 'Loginlogs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="loginlog-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
