<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

final class InputPollOption
{
    use DataConstructor;
    /**
     * Retrieves the text of the poll option.
     * This text represents the option provided in the poll, and it must be between 1 and 100 characters.
     *
     * @return string The text of the poll option.
     */
    public function getText(): string
    {
        return $this->data['text'];
    }

    /**
     * Retrieves the mode for parsing entities in the poll option text, if specified.
     * This mode determines how text entities are parsed and formatted. Currently, only custom emoji entities are allowed.
     *
     * @return string|null The text parse mode or null if not specified.
     */
    public function getTextParseMode(): ?string
    {
        return $this->data['text_parse_mode'] ?? null;
    }

    /**
     * Retrieves a JSON-serialized list of special entities that appear in the poll option text, if any.
     * These entities are optional and can be specified instead of using text_parse_mode.
     *
     * @return array|null An array of MessageEntity objects if present, or null if there are no special entities.
     */
    public function getTextEntities(): ?array
    {
        return $this->data['text_entities'] ?? null;
    }
}