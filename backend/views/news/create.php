<?php
/**
 * team:你说的队，NKU
 * Coding by miyilin 2111566,20240119
 * view
 */
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\News $model */

$this->title = 'Create News';
$this->params['breadcrumbs'][] = ['label' => 'News', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
