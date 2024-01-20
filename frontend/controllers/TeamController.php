<?php

namespace frontend\controllers;

use yii\web\Controller;

class TeamController extends Controller
{
    public function actionIndex()
    {

        return $this->render('index');
    }

}