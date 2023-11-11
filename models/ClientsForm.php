<?php

namespace app\models;

use yii\base\Model;

class ClientsForm extends Model
{
    public $f;
    public $email;
    public $phone;
    public $passport;

    public function rules()
    {
        return [
            [['f', 'email', 'phone', 'passport'], 'required', 'message' => 'Это поле должно быть заполнено'],
            ['f', 'string', 'min' => 4, 'tooShort' => 'Минимальная длина 4 символа'],
            ['f', 'string', 'max' => 80, 'tooLong' => 'Максимальная длина  80 символов'],
            ['email', 'email', 'message' => 'Некорректный адрес электронной почты'],
            ['phone', 'match', 'pattern' => '/^\+7 \(\d{3}\) \d{3}-\d{2}-\d{2}$/', 'message' => 'Некорректный номер телефона'],
            ['passport', 'match', 'pattern' => '/^Серия: \d{4} Номер: \d{6}$/', 'message' => 'Неверно введены данные паспорта'],
        ];
    }
}