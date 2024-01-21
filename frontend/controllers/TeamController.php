<?php
/**
 * team:你说的队，NKU
 * Coding by zhujingbo 2111451,20240119
 * 控制器
 */
namespace frontend\controllers;

use yii\web\Controller;

class TeamController extends Controller
{
    public function actionIndex()
    {

        return $this->render('index');
    }

}