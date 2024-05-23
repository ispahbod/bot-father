<?php

namespace Ispahbod\BotFather\Field;

use Ispahbod\BotFather\Type\ChatAdministratorRights;

final class SetMyDefaultAdministratorRightsField
{
    /**
     * A JSON-serialized object describing new default administrator rights.
     * If not specified, the default administrator rights will be cleared.
     * @var ChatAdministratorRights|null
     */
    public const RIGHTS = 'rights';

    /**
     * Pass True to change the default administrator rights of the bot in channels.
     * Otherwise, the default administrator rights of the bot for groups and supergroups will be changed.
     * @var bool|null
     */
    public const FOR_CHANNELS = 'for_channels'; 
}