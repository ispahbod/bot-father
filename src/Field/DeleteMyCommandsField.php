<?php

namespace Ispahbod\BotFather\Field;

final class DeleteMyCommandsField
{
    /**
     * Optional. A JSON-serialized object describing the scope of users for which the commands are relevant.
     * Defaults to BotCommandScopeDefault.
     * @var string|null
     */
    public const SCOPE = 'scope';

    /**
     * Optional. A two-letter ISO 639-1 language code. If empty, commands will be applied to all users from the given scope,
     * for whose language there are no dedicated commands.
     * @var string|null
     */
    public const LANGUAGE_CODE = 'language_code';
}
