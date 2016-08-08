<?php 
    
$config = [
    'register' => [
        [
            'field' => 'identity',
            'label' => 'Логин',
            'rules' => 'required|is_unique[users.username]|regex_match[/^[a-z0-9]{6,16}$/]'
        ],
        [
            'field' => 'email',
            'label' => 'E-mail',
            'rules' => 'required|is_unique[users.email]|valid_email'
        ],
        [
            'field' => 'password',
            'label' => 'Пароль',
            'rules' => 'required|regex_match[/^([a-zA-Z0-9@*#]{8,15})$/]'
        ],
        [
            'field' => 'password_confirm',
            'label' => 'Второе поле Пароль',
            'rules' => 'required|matches[password]'
        ],
        [
            'field' => 'first_name',
            'label' => 'Имя',
            'rules' => 'required|alpha'
        ],
        [
            'field' => 'last_name',
            'label' => 'Фамилия',
            'rules' => 'required|alpha'
        ],
        [
            'field' => 'phone',
            'label' => 'Телефон',
            'rules' => 'required'
        ],
    ]
];