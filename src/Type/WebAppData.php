<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class WebAppData
{
    use DataConstructor;
    /**
     * Retrieves the data.
     * The data. Be aware that a bad client can send arbitrary data in this field.
     *
     * @return string The data.
     */
    public function getData(): string
    {
        return $this->data['data'];
    }

    /**
     * Retrieves the text of the web_app keyboard button from which the Web App was opened.
     * Text of the web_app keyboard button from which the Web App was opened. Be aware that a bad client can send arbitrary data in this field.
     *
     * @return string The button text.
     */
    public function getButtonText(): string
    {
        return $this->data['button_text'];
    }
}
