<?php
/**
 * Created by IntelliJ IDEA.
 * User: Dennis Eikelenboom
 * Date: 26-3-2015
 * Time: 13:58
 */

namespace app\controllers;

use Yii;
use yii\web\Controller;

class PlayerController extends Controller {

    public function actionIndex()
    {
        return $this->render('content');
    }

}