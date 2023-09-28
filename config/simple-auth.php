<?php

return [
    'layouts'               => [
        'app'   => 'simple-auth::layouts.app',
        'auth'  => 'simple-auth::layouts.auth',
    ],
    'login'                 => 'simple-auth::auth.login',
    'register'              => 'simple-auth::auth.register',
    'forgot-password'       => 'simple-auth::auth.forgot-password',
    'reset-password'        => 'simple-auth::auth.reset-password',
    'verify-email'          => 'simple-auth::auth.verify-email',
    'verify-email-notice'   => 'simple-auth::auth.verify-email-notice',
    'confirm-password'      => 'simple-auth::auth.confirm-password',
    'two-factor-challenge'  => 'simple-auth::auth.two-factor-challenge',
    'two-factor-challenge-notice'   => 'simple-auth::auth.two-factor-challenge-notice',
];
