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
            'rules' => 'required'
        ],
        [
            'field' => 'passport',
            'label' => 'Паспорт',
            'rules' => 'required'
        ],
        [
            'field' => 'issued_by',
            'label' => 'Кем выдан',
            'rules' => 'required'
        ],
        [
            'field' => 'registration_place',
            'label' => 'Место регистрации',
            'rules' => 'required'
        ],
        [
            'field' => 'password',
            'label' => 'Пароль',
            'rules' => 'required|regex_match[/^([a-zA-Zа-яА-Я0-9@*#]{8,15})$/]'
        ],
        [
            'field' => 'password_confirm',
            'label' => 'Второе поле Пароль',
            'rules' => 'required|matches[password]'
        ],
        [
            'field' => 'first_name',
            'label' => 'Имя',
            'rules' => 'required'
        ],
        [
            'field' => 'last_name',
            'label' => 'Фамилия',
            'rules' => 'required'
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
            'rules' => 'required|in_list[1,2,3]'
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
            'rules' => 'required|regex_match[/^([a-zA-Zа-яА-я0-9@*#]{8,15})$/]'
        ],
        [
            'field' => 'password_confirm',
            'label' => 'Второе поле Пароль',
            'rules' => 'required|matches[password]'
        ],
        [
            'field' => 'first_name',
            'label' => 'Имя',
            'rules' => 'required'
        ],
        [
            'field' => 'last_name',
            'label' => 'Фамилия',
            'rules' => 'required'
        ],
        [
            'field' => 'phone',
            'label' => 'Телефон',
            'rules' => 'required'
        ],
        [
            'field' => 'inn',
            'label' => 'ИНН',
            'rules' => 'required|numeric'
        ],
        [
            'field' => 'kpp',
            'label' => 'КПП',
            'rules' => 'required|numeric'
        ],
        [
            'field' => 'member_type',
            'label' => 'HACKER!',
            'rules' => 'required|in_list[1,2]'
        ],
    ]
];