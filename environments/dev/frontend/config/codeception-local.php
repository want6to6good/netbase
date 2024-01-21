<?php
/**
 * team:你说的队，NKU
 * Coding by zhanglinhao 2113976,20240119
 * 框架生成
 */
return yii\helpers\ArrayHelper::merge(
    require dirname(dirname(__DIR__)) . '/common/config/codeception-local.php',
    require __DIR__ . '/main.php',
    require __DIR__ . '/main-local.php',
    require __DIR__ . '/test.php',
    require __DIR__ . '/test-local.php',
    [
    ]
);
