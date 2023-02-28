# Password Strength Enforcer

> Enforces a password strength level.

## Note

There might be some discrepancy between the scores seen in client and server.

That's because `zxcvbn-php` _is not_ an exact port of `zxcvbn-ts`.

## Requirements

- [GB Password Strength](https://github.com/glowingblue/flarum-ext-password-strength)

## Install:

```sh
composer require nearata/flarum-ext-password-strength-enforcer:"*"
```

## Update

```sh
composer update nearata/flarum-ext-password-strength-enforcer:"*"
php flarum cache:clear
```
