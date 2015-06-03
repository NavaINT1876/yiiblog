<?php
/**
 * Created by PhpStorm.
 * User: Igor
 * Date: 03.06.2015
 * Time: 15:54
 */

namespace app\models;
use yii\base\Model;

class UserForm extends Model
{
    public $name;
    public $email;
    public function rules()
    {
        return [
            [['name','email'], 'required'],
            ['email','email'],
        ];
    }
}