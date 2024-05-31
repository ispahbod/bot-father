<?php

namespace Ispahbod\BotFather\Constant;

class Times
{
    public const SECOND = 1;
    public const MINUTE = 60 * self::SECOND;
    public const HOUR = 60 * self::MINUTE;
    public const DAY = 24 * self::HOUR;
    public const WEEK = 7 * self::DAY;
    public const MONTH = 30 * self::DAY;
    public const YEAR = 365 * self::DAY;
    public const MILLISECOND = 0.001 * self::SECOND;
    public const MICROSECOND = 0.000001 * self::SECOND;
    public const NANOSECOND = 0.000000001 * self::SECOND;
}
