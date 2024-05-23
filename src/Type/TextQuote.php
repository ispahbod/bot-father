<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class TextQuote
{
    use DataConstructor;
    /**
     * Retrieves the text of the quoted part of a message that is replied to by the given message.
     *
     * @return string|null The text of the quote if available, otherwise null.
     */
    public function getText(): ?string
    {
        return $this->data['text'] ?? null;
    }

    /**
     * Retrieves special entities that appear in the quote. Only entities like bold, italic, underline, 
     * strikethrough, spoiler, and custom_emoji are considered.
     *
     * @return array|null Array of MessageEntity objects if available, otherwise null.
     */
    public function getEntities(): ?array
    {
        return isset($this->data['entities']) ? array_map(function ($entity) {
            return new MessageEntity($entity);
        }, array_filter($this->data['entities'], function ($entity) {
            return in_array($entity['type'], ['bold', 'italic', 'underline', 'strikethrough', 'spoiler', 'custom_emoji']);
        })) : null;
    }

    /**
     * Retrieves the approximate quote position in the original message in UTF-16 code units as specified by the sender.
     *
     * @return int|null The position of the quote if available, otherwise null.
     */
    public function getPosition(): ?int
    {
        return $this->data['position'] ?? null;
    }

    /**
     * Determines if the quote was chosen manually by the message sender or added automatically by the server.
     *
     * @return bool|null True if the quote was chosen manually, otherwise false or null if automatically added or unknown.
     */
    public function isManual(): ?bool
    {
        return $this->data['is_manual'] ?? null;
    }
}
