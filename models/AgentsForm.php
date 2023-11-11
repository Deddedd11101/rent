<?php

namespace app\models;

use yii\base\Model;

class AgentsForm extends Model
{
    public $f;
    public $date;
    public $email;
    public $phone;
    public function rules()
    {
        return [
            [['f', 'date', 'email', 'phone'], 'required', 'message' => 'Это поле должно быть заполнено'],
            ['f', 'string', 'min' => 4, 'tooShort' => 'Минимальная длина 4 символа'],
            ['f', 'string', 'max' => 80, 'tooLong' => 'Максимальная длина  80 символов'],
            ['date', 'date', 'format' => 'php:Y-m-d'],
            ['date', 'compare', 'compareValue' => date('Y-m-d'), 'operator' => '<=', 'message' => 'Дата ещё не наступила'],
            ['email', 'email'],
            ['email', 'string'],
            ['phone', 'match', 'pattern' => '/^\+7 \(\d{3}\) \d{3}-\d{2}-\d{2}$/', 'message' => 'Некорректный номер телефона'],

        ];
    }
}