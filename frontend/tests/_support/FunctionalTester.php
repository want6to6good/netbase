<?php
/**
 * team:你说的队，NKU
 * Coding by zhanglinhao 2113976,20240119
 * 框架生成
 */
namespace frontend\tests;

/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void verify($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method \Codeception\Lib\Friend haveFriend($name, $actorClass = NULL)
 *
 * @SuppressWarnings(PHPMD)
 */
class FunctionalTester extends \Codeception\Actor
{
    use _generated\FunctionalTesterActions;


    public function seeValidationError($message)
    {
        $this->see($message, '.invalid-feedback');
    }

    public function dontSeeValidationError($message)
    {
        $this->dontSee($message, '.invalid-feedback');
    }
}
