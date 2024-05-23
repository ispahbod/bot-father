<?php

namespace Ispahbod\BotFather\Field;

final class GetMyCommandsField
{
    /**
     * Optional. A JSON-serialized object describing the scope of users for the commands.
     * Defaults to BotCommandScopeDefault.
     * @var string|null
     */
    public const SCOPE = 'scope';

    /**
     * Optional. A two-letter ISO 639-1 language code or an empty string.
     * @var string|null
     */
    public const LANGUAGE_CODE = 'language_code';
}
