<?php

return [
  'web' => [
    'index' => [
      'id' => 1,
      'pagetitle' => 'Home',
      'template' => 2,
      'hidemenu' => false,
      'groups' => [
        'Users', 'Dispatchers',
      ],
    ],
    'service' => [
      'id' => 2,
      'pagetitle' => 'Service',
      'template' => 0,
      'hidemenu' => true,
      'published' => false,
      'resources' => [
        '403' => [
          'id' => 3,
          'pagetitle' => 'Ошибка 403 - отказано в доступе',
          'template' => 0,
          'hidemenu' => true,
          'menutitle' => '403',
          'uri' => '403',
          'uri_override' => true,
        ],
        '404' => [
          'id' => 4,
          'pagetitle' => 'Ошибка 404 - Страница не найдена',
          'template' => 0,
          'hidemenu' => true,
          'uri' => '404',
          'uri_override' => true,
        ],
      ],
    ],
    'login' => [
      'id' => 5,
      'pagetitle' => 'Login',
      'template' => 0,
      'hidemenu' => true,
      'published' => false,
      'resources' => [
        'authorization' => [
          'id' => 6,
          'pagetitle' => 'Авторизация',
          'longtitle' => 'Авторизация пользователя',
          'template' => 3,
          'hidemenu' => true,
          'uri' => 'authorization',
          'uri_override' => true,
        ],
        'registration' => [
          'id' => 7,
          'pagetitle' => 'Регистрация',
          'longtitle' => 'Регистрация пользователя',
          'template' => 3,
          'hidemenu' => true,
          'uri' => 'registration',
          'uri_override' => true,
        ],
      ],
    ],
    'lk' => [
      'id' => 8,
      'pagetitle' => 'Личный кабинет',
      'template' => 2,
      'hidemenu' => false,
      'uri' => 'lk',
      'uri_overide' => true,
      'groups' => [
        'Users', 'Dispatchers',
      ],
    ],
    'setting' => [
      'id' => 9,
      'pagetitle' => 'Настройки',
      'template' => 2,
      'hidemenu' => false,
      'uri' => 'setting',
      'uri_overide' => true,
      'groups' => [
        'Users', 'Dispatchers',
      ],
    ],
  ],
];