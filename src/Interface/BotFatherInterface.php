<?php

namespace LaravelBot\BotFather\Interface;

use LaravelBot\BotFather\Class\Chat;
use LaravelBot\BotFather\Class\Game;
use LaravelBot\BotFather\Class\Getter;
use LaravelBot\BotFather\Class\Inline;
use LaravelBot\BotFather\Class\Passport;
use LaravelBot\BotFather\Class\Payment;
use LaravelBot\BotFather\Class\Process;
use LaravelBot\BotFather\Class\Sender;
use LaravelBot\BotFather\Class\Setter;
use LaravelBot\BotFather\Class\Update;
use LaravelBot\BotFather\Class\Webhook;

interface BotFatherInterface
{
    public static function Inline(string $token): Inline;

    public static function Chat(string $token): Chat;

    public static function Setter(string $token): Setter;

    public static function Sender(string $token): Sender;

    public static function Getter(string $token): Getter;

    public static function Update(string $token): Update;

    public static function Webhook(string $token): Webhook;

    public static function Payment(string $token): Payment;

    public static function Game(string $token): Game;

    public static function Passport(string $token): Passport;

    public static function Process($json): Process;
}
