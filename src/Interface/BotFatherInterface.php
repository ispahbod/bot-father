<?php

namespace Ispahbod\BotFather\Interface;

use Ispahbod\BotFather\Class\Chat;
use Ispahbod\BotFather\Class\Game;
use Ispahbod\BotFather\Class\Getter;
use Ispahbod\BotFather\Class\Inline;
use Ispahbod\BotFather\Class\Passport;
use Ispahbod\BotFather\Class\Payment;
use Ispahbod\BotFather\Class\Process;
use Ispahbod\BotFather\Class\Sender;
use Ispahbod\BotFather\Class\Setter;
use Ispahbod\BotFather\Class\Modifier;
use Ispahbod\BotFather\Class\Webhook;

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
