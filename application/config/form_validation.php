<?php 
    
$config = [
    'register' => [
        [
            'field' => 'identity',
            'label' => 'Логин',
            'rules' => 'required|is_unique[users.username]|min_length[6]|max_length[16]|alpha'
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
    ]
];