<?php
/**
 * Created by PhpStorm.
 * User: Konstantin
 * Date: 06.11.2016
 * Time: 18:09
 */

namespace app\models;
use yii\base\Model;


class TestForm extends Model
{
    public $name;
    public $email;
    public $text;
//    public $login;
//    public $gender;
//    public $cityList;
//    public $color;

    public function attributeLabels()
    {
        return [
            'name'  => 'Имя',
            'email' => 'Email',
            'text'  => 'Текст сообщения',
//            'login' => 'Логин',
        ];
    }

    public function rules()
    {
        return [
              [ ['name', 'email'], 'required', 'message' => 'Поле обязательно для заполения' ],
              [ 'email', 'email', 'message' => 'Mail is invalid'],
//              ['name', 'string', 'min' => 2, 'tooShort' => 'мало' ],
//              ['name', 'string', 'max' => 15, 'tooLong' => 'много' ],
              [ 'name', 'string', 'length' => [2,5], 'tooShort' => 'too short length', 'tooLong' => 'too lot length' ],
              [ 'name', 'myRule' ], //работает только на сервере
              [ 'text', 'trim' ],
            //['text','safe'], // safe указывает что данное поле безопасно и можно его загружать в модель
        ];
    }


    public function myRule($attr)
    {
        if ( !in_array($this->$attr, ['hello', 'world'])) {
            $this->addError($attr, 'Wrong!');
        }
    }

}