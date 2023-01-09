<?php

return [
    'banned'    => [
        'permanent' => 'Вас забанили назавжди.',
        'temporary' => '{1} Вас забанили на :days день|[2,*] Вас забанили на кількість днів: :days',
    ],
    'confirm'   => [
        'confirm'   => 'Підтвердити',
        'error'     => 'Неправильний пароль, будь ласка, спробуйте ще раз.',
        'helper'    => 'Будь ласка, підтвердіть свій пароль, перш ніж зможете продовжити.',
        'title'     => 'Підтвердження паролю',
    ],
    'failed'    => 'Вказані дані не збігаються з нашими записами.',
    'helpers'   => [
        'password'  => 'Показати / Сховати пароль',
    ],
    'login'     => [
        'fields'                => [
            '2fa'       => 'Одноразовий пароль',
            'email'     => 'Ел.пошта',
            'password'  => 'Пароль',
        ],
        'login_with_facebook'   => 'Увійти через Фейсбук',
        'login_with_google'     => 'Увійти через Гугл',
        'login_with_twitter'    => 'Увійти через Твіттер',
        'new_account'           => 'Зареєструватися',
        'or'                    => 'АБО',
        'password_forgotten'    => 'Забули пароль?',
        'remember_me'           => 'Пам\'ятати мене',
        'submit'                => 'Логін',
        'title'                 => 'Логін',
    ],
    'password'  => 'Пароль неправильний.',
    'register'  => [
        'already_account'           => 'Уже маєте акаунт?',
        'errors'                    => [
            'email_already_taken'   => 'Акаунт із цією поштою вже зареєстрований.',
            'general_error'         => 'Під час реєстрації акаунту сталася помилка. Будь ласка, спробуйте знову.',
        ],
        'fields'                    => [
            'email'     => 'Ел.пошта',
            'name'      => 'Ім\'я користувача',
            'password'  => 'Пароль',
            'tos_clean' => 'Я приймаю умови :privacy',
        ],
        'register_with_facebook'    => 'Зареєструватися через Фейсбук',
        'register_with_google'      => 'Зареєструватися через Гугл',
        'register_with_twitter'     => 'Зареєструватися через Твіттер',
        'submit'                    => 'Зареєструватися',
        'title'                     => 'Зареєструватися',
    ],
    'reset'     => [
        'fields'    => [
            'email'                 => 'Адреса ел.пошти',
            'password'              => 'Пароль',
            'password_confirmation' => 'Підтвердіть пароль',
        ],
        'send'      => 'Надіслати посилання для скидання паролю',
        'submit'    => 'Скинути пароль',
        'title'     => 'Скинути пароль',
    ],
    'tfa'       => [
        'helper'    => 'Увімкнено двофакторну автентифікацію. Будь ласка, вкажіть одноразовий пароль (OTP), наданий вашим додатком автентифікації.',
        'title'     => 'Двофакторна автентифікація',
    ],
    'throttle'  => 'Забагато спроб входу. Будь ласка, спробуйте ще раз через :seconds секунд.',
];
