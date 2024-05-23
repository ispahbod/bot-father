<?php

namespace Ispahbod\BotFather\Field;

class GetMyDefaultAdministratorRightsField
{
    /**
     * Pass True to get default administrator rights of the bot in channels.
     * Otherwise, default administrator rights of the bot for groups and supergroups will be returned.
     * @var bool|null
     */
    public const FOR_CHANNELS = 'for_channels';
}