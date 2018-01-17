<?php
namespace justique\media\controllers;
use Yii;
use yii\web\Controller;
use klisl\mytest\models\Tests;
class DefaultController extends Controller
{
    public $layout = 'main';
    public function actionIndex()
    {
        // регистрируем ресурсы:
        \justique\media\TestsAssetsBundle::register($this->view);
        $datas = Tests::find()->all();
        return $this->render('index',[
            'datas' => $datas
        ]);
    }
}

