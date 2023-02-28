<?php

namespace Nearata\PasswordStrengthEnforcer;

use Flarum\Extend;
use Flarum\User\UserValidator;

return [
    (new Extend\Frontend('admin'))
        ->js(__DIR__.'/js/dist/admin.js'),

    new Extend\Locales(__DIR__.'/locale'),

    (new Extend\Validator(UserValidator::class))
        ->configure(PasswordStrengthValidator::class),

    (new Extend\Settings)
        ->default('nearata-password-strength-enforcer.strength', 'medium')
];
