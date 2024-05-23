<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class InputMediaAudio
{
    use DataConstructor;

    /**
     * Retrieves the type of the result, which must be 'audio'.
     *
     * @return string The type of the result.
     */
    public function getType(): string
    {
        return 'audio';
    }

    /**
     * Retrieves the file to send.
     *
     * @return string The file identifier, URL, or attached file name.
     */
    public function getMedia(): string
    {
        return $this->data['media'];
    }

    /**
     * Retrieves the optional thumbnail of the file sent.
     *
     * @return string|null The thumbnail file identifier or URL, or null if not available.
     */
    public function getThumbnail(): ?string
    {
        return $this->data['thumbnail'] ?? null;
    }

    /**
     * Retrieves the optional caption of the audio.
     *
     * @return string|null The caption of the audio if available, otherwise null.
     */
    public function getCaption(): ?string
    {
        return $this->data['caption'] ?? null;
    }

    /**
     * Retrieves the optional mode for parsing entities in the audio caption.
     *
     * @return string|null The parse mode if available, otherwise null.
     */
    public function getParseMode(): ?string
    {
        return $this->data['parse_mode'] ?? null;
    }

    /**
     * Retrieves the optional list of special entities that appear in the caption.
     *
     * @return array|null The list of MessageEntity if available, otherwise null.
     */
    public function getCaptionEntities(): ?array
    {
        return $this->data['caption_entities'] ?? null;
    }

    /**
     * Retrieves the optional duration of the audio in seconds.
     *
     * @return int|null The duration of the audio if available, otherwise null.
     */
    public function getDuration(): ?int
    {
        return $this->data['duration'] ?? null;
    }

    /**
     * Retrieves the optional performer of the audio.
     *
     * @return string|null The performer of the audio if available, otherwise null.
     */
    public function getPerformer(): ?string
    {
        return $this->data['performer'] ?? null;
    }

    /**
     * Retrieves the optional title of the audio.
     *
     * @return string|null The title of the audio if available, otherwise null.
     */
    public function getTitle(): ?string
    {
        return $this->data['title'] ?? null;
    }
}
