<?php
/**
 * team:你说的队，NKU
 * Coding by zhanglinhao 2113976,20240119
 * 框架生成
 */
namespace frontend\tests\functional;

use frontend\tests\FunctionalTester;

class AboutCest
{
    public function checkAbout(FunctionalTester $I)
    {
        $I->amOnRoute('site/about');
        $I->see('About', 'h1');
    }
}
