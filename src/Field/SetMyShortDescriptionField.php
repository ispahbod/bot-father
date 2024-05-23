<?php

namespace Ispahbod\BotFather\Field;

class SetMyShortDescriptionField
{
    /**
     * New short description for the bot; 0-120 characters.
     * Pass an empty string to remove the dedicated short description for the given language.
     * @var string|null
     */
    public const SHORT_DESCRIPTION = 'short_description';

    /**
     * Optional. A two-letter ISO 639-1 language code.
     * If empty, the short description will be applied to all users for whose language there is no dedicated short description.
     * @var string|null
     */
    public const LANGUAGE_CODE = 'language_code';
}