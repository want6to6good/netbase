<?php
/**
 * team:你说的队，NKU
 * Coding by zhanglinhao 2113976,20240119
 * view
 */
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
