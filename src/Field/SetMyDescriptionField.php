<?php

namespace Ispahbod\BotFather\Field;

class SetMyDescriptionField
{
    /**
     * New bot description; 0-512 characters.
     * Pass an empty string to remove the dedicated description for the given language.
     * @var string|null
     */
    public const DESCRIPTION = 'description';

    /**
     * Optional. A two-letter ISO 639-1 language code.
     * If empty, the description will be applied to all users for whose language there is no dedicated description.
     * @var string|null
     */
    public const LANGUAGE_CODE = 'language_code';
}