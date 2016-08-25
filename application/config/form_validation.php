<?php 
    
$config = [
    'register_individual' => [
        [
            'field' => 'email',
            'label' => 'E-mail',
            'rules' => 'required|is_unique[users.email]|valid_email'
        ],
        [
            'field' => 'passport',
            'label' => 'Паспорт',
            'rules' => 'required|alpha_numeric'
        ],
        [
            'field' => 'passport',
            'label' => 'Паспорт',
            'rules' => 'required|alpha_numeric'
        ],
        [
            'field' => 'issued_by',
            'label' => 'Кем выдан',
            'rules' => 'required|alpha'
        ],
        [
            'field' => 'registration_place',
            'label' => 'Место регистрации',
            'rules' => 'required'
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
        [
            'field' => 'member_type',
            'label' => 'HACKER!',
            'rules' => 'required|in_list[1,2]'
        ],
    ],
    'register_organization' => [
        [
            'field' => 'email',
            'label' => 'E-mail',
            'rules' => 'required|is_unique[users.email]|valid_email'
        ],
        [
            'field' => 'ownership_type',
            'label' => 'Форма собственности',
            'rules' => 'required|numeric'
        ],
        [
            'field' => 'company',
            'label' => 'Название компании',
            'rules' => 'required'
        ],
        [
            'field' => 'legal_address',
            'label' => 'Юридический адрес',
            'rules' => 'required'
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
        [
            'field' => 'member_type',
            'label' => 'HACKER!',
            'rules' => 'required|in_list[1,2]'
        ],
    ]
];