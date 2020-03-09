<?php

namespace forms;

use core\Form;

class SignUpForm extends Form
{
    public function __construct()
    {
        $this->formName = 'sign-up';
        $this->method = \METHOD_POST;
        $this->fields = [
            [
                'name' => 'login',
                'type' => 'text',
                'placeholder' => 'Введите логин',
            ],
            [
                'name' => 'password',
                'type' => 'password',
                'placeholder' => 'Введите пароль',
            ],
            [
                'name' => 'password-confirm',
                'type' => 'password',
                'placeholder' => 'Повторите пароль',
            ],
            [
                'type' => 'submit',
                'value' => 'Войти',
            ],
        ];
    }
}