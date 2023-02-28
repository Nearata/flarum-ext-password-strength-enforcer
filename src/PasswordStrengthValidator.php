<?php

namespace Nearata\PasswordStrengthEnforcer;

use Flarum\Foundation\AbstractValidator;
use Flarum\Settings\SettingsRepositoryInterface;
use Illuminate\Validation\Validator;
use ZxcvbnPhp\Zxcvbn;

class PasswordStrengthValidator
{
    protected $settings;

    public function __construct(SettingsRepositoryInterface $settings)
    {
        $this->settings = $settings;
    }

    public function __invoke(AbstractValidator $flarumValidator, Validator $validator)
    {
        $strength = (string) $this->settings->get('nearata-password-strength-enforcer.strength');

        $validator->addExtension(
            'zxcvbn',
            function ($attribute, $value, $parameters) use ($strength) {
                return (new Zxcvbn())->passwordStrength($value)['score'] >= ($strength == 'medium' ? 2 : 4);
            }
        );

        $validator->addRules([
            'password' => ['zxcvbn']
        ]);
    }
}
