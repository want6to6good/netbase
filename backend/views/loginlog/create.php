<?php
/**
 * team:你说的队，NKU
 * Coding by miyilin 2111566,20240119
 * view
 */
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
