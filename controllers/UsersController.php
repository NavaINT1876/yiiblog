<?php
/**
 * Created by PhpStorm.
 * User: Igor
 * Date: 03.06.2015
 * Time: 16:15
 */
namespace app\controllers;

use yii\web\Controller;
use app\models\Users;

class UsersController extends Controller{
    public function actionIndex(){
        $users = Users::find()->all();
        return $this->render('index',['users'=>$users]);
    }
}