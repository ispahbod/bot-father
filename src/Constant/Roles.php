<?php

namespace LaravelBot\BotFather\Constant;

final class Roles
{
    public const USER = 1;
    public const SPECIAL_USER = 2;
    public const ADMIN = 3;
    public const DEVELOPER = 4;

    public static function IsAdmin(int $role): bool
    {
        return $role === self::ADMIN;
    }

    public static function IsDeveloper(int $role): bool
    {
        return $role === self::DEVELOPER;
    }

    public static function IsSpecialUser(int $role): bool
    {
        return $role === self::SPECIAL_USER;
    }

    public static function IsNormalUser(int $role): bool
    {
        return $role === self::USER;
    }

    public static function IsAdminOrDeveloper(int $role): bool
    {
        return $role === self::ADMIN || $role === self::DEVELOPER;
    }
}