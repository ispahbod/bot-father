<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

final class InputMediaDocument
{
    use DataConstructor;

    /**
     * Retrieves the type of the result, which must be 'document'.
     *
     * @return string The type of the result.
     */
    public function getType(): string
    {
        return 'document';
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
     * Retrieves the optional caption of the document.
     *
     * @return string|null The caption of the document if available, otherwise null.
     */
    public function getCaption(): ?string
    {
        return $this->data['caption'] ?? null;
    }

    /**
     * Retrieves the optional mode for parsing entities in the document caption.
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
     * Checks if automatic server-side content type detection for files uploaded using multipart/form-data is disabled.
     *
     * @return bool True if content type detection is disabled, otherwise false.
     */
    public function isContentTypeDetectionDisabled(): bool
    {
        return $this->data['disable_content_type_detection'] ?? false;
    }
}
