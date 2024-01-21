<?php
/**
 * team:你说的队，NKU
 * Coding by zhujingbo 2111451,20240119
 * view
 */
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Userdata $model */

$this->title = 'Create Userdata';
$this->params['breadcrumbs'][] = ['label' => 'Userdatas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userdata-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
