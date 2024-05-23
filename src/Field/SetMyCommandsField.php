<?php

namespace Ispahbod\BotFather\Field;

use Ispahbod\BotFather\Type\BotCommand;
use Ispahbod\BotFather\Type\BotCommandScope;

final class SetMyCommandsField
{
    /**
     * A JSON-serialized list of bot commands to be set as the list of the bot's commands.
     * At most 100 commands can be specified.
     * @var BotCommand[]
     */
    public const COMMANDS = 'commands';

    /**
     * A JSON-serialized object, describing the scope of users for which the commands are relevant.
     * Defaults to BotCommandScopeDefault.
     * @var BotCommandScope|null
     */
    public const SCOPE = 'scope';

    /**
     * A two-letter ISO 639-1 language code. If empty, commands will be applied to all users from the given scope,
     * for whose language there are no dedicated commands.
     * @var string|null
     */
    public const LANGUAGE_CODE = 'language_code';
}
