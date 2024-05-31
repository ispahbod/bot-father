<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

final class InputMediaPhoto
{
    use DataConstructor;

    /**
     * Retrieves the type of the result.
     *
     * @return string The type of the result, must be 'photo'.
     */
    public function getType(): string
    {
        return 'photo';
    }

    /**
     * Retrieves the file to send.
     * This can be a file_id, an HTTP URL, or an attached file using multipart/form-data.
     *
     * @return string The file to send.
     */
    public function getMedia(): string
    {
        return $this->data['media'];
    }

    /**
     * Retrieves the optional caption of the photo.
     *
     * @return string|null The caption of the photo if available, otherwise null.
     */
    public function getCaption(): ?string
    {
        return $this->data['caption'] ?? null;
    }

    /**
     * Retrieves the optional mode for parsing entities in the photo caption.
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
     * Checks if the photo needs to be covered with a spoiler animation.
     *
     * @return bool True if the photo has a spoiler, otherwise false.
     */
    public function hasSpoiler(): bool
    {
        return $this->data['has_spoiler'] ?? false;
    }
    public function getEffectId(): ?string
    {
        return $this->data['effect_id'] ?? null;
    }
}
