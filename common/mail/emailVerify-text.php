<?php
/**
 * team:你说的队，NKU
 * Coding by zhanglinhao 2113976,20240119
 * 框架生成
 */
/** @var yii\web\View $this */
/** @var common\models\User $user */

$verifyLink = Yii::$app->urlManager->createAbsoluteUrl(['site/verify-email', 'token' => $user->verification_token]);
?>
Hello <?= $user->username ?>,

Follow the link below to verify your email:

<?= $verifyLink ?>
