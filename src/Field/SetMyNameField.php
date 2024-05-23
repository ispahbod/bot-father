<?php

namespace Ispahbod\BotFather\Field;

class SetMyNameField
{
    /**
     * New bot name; 0-64 characters.
     * Pass an empty string to remove the dedicated name for the given language.
     * @var string|null
     */
    public const NAME = 'name';

    /**
     * Optional. A two-letter ISO 639-1 language code.
     * If empty, the name will be shown to all users for whose language there is no dedicated name.
     * @var string|null
     */
    public const LANGUAGE_CODE = 'language_code';
}