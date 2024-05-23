<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class InlineKeyboardMarkup
{
    use DataConstructor;

    /**
     * Retrieves the array of button rows, where each row is represented by an array of InlineKeyboardButton objects.
     *
     * @return array The array of button rows.
     */
    public function getInlineKeyboard(): array
    {
        return $this->data['inline_keyboard'];
    }
}
