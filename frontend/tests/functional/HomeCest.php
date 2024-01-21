<?php
/**
 * team:你说的队，NKU
 * Coding by zhanglinhao 2113976,20240119
 * 框架生成
 */
namespace frontend\tests\functional;

use frontend\tests\FunctionalTester;

class HomeCest
{
    public function checkOpen(FunctionalTester $I)
    {
        $I->amOnRoute(\Yii::$app->homeUrl);
        $I->see('My Application');
        $I->seeLink('About');
        $I->click('About');
        $I->see('This is the About page.');
    }
}