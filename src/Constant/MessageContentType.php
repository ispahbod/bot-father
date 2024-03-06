<?php

namespace Ispahbod\BotFather\Constant;

class MessageContentType
{
    public const TEXT = 'text';
    public const GIVEAWAY = 'giveaway';
    public const ANIMATION = 'animation';
    public const AUDIO = 'audio';
    public const  DOCUMENT = 'document';
    public const PHOTO = 'photo';
    public const STICKER = 'sticker';
    public const  STORY = 'story';
    public const  VIDEO = 'video';
    public const  VIDEO_NOTE = 'video_note';
    public const VOICE = 'voice';
    public const CONTACT = 'contact';
    public const DICE = 'dice';
    public const GAME = 'game';
    public const POLL = 'poll';
    public const VENUE = 'venue';
    public const  LOCATION = 'location';
    public const INVOICE = 'invoice';
    public const WEB_APP_DATA = 'web_app_data';

    public static function GetContentType($type): int
    {
        return match ($type) {
            self::TEXT => 1,
            self::GIVEAWAY => 2,
            self::ANIMATION => 3,
            self::AUDIO => 4,
            self::DOCUMENT => 5,
            self::PHOTO => 6,
            self::STICKER => 7,
            self::STORY => 8,
            self::VIDEO => 9,
            self::VIDEO_NOTE => 10,
            self::VOICE => 11,
            self::CONTACT => 12,
            self::DICE => 13,
            self::GAME => 14,
            self::POLL => 15,
            self::VENUE => 16,
            self::LOCATION => 17,
            self::INVOICE => 18,
        };
    }
}