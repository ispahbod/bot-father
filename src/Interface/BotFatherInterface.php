<?php

namespace Ispahbod\BotFather\Interface;

use Ispahbod\BotFather\Method\Chat;
use Ispahbod\BotFather\Method\Game;
use Ispahbod\BotFather\Method\Getter;
use Ispahbod\BotFather\Method\Inline;
use Ispahbod\BotFather\Method\Passport;
use Ispahbod\BotFather\Method\Payment;
use Ispahbod\BotFather\Method\Process;
use Ispahbod\BotFather\Method\Sender;
use Ispahbod\BotFather\Method\Setter;
use Ispahbod\BotFather\Method\Modifier;
use Ispahbod\BotFather\Method\Webhook;

interface BotFatherInterface
{
    public static function Inline(string $token): Inline;

    public static function Chat(string $token): Chat;

    public static function Setter(string $token): Setter;

    public static function Sender(string $token): Sender;

    public static function Getter(string $token): Getter;

    public static function Modifier(string $token): Modifier;

    public static function Webhook(string $token): Webhook;

    public static function Payment(string $token): Payment;

    public static function Game(string $token): Game;

    public static function Passport(string $token): Passport;

    public static function Process(string $json): Process;
}
