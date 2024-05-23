<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class Voice
{
    use DataConstructor;
    /**
     * Retrieves the identifier for this file, which can be used to download or reuse the file.
     *
     * @return string The file identifier.
     */
    public function getFileId(): string
    {
        return $this->data['file_id'];
    }

    /**
     * Retrieves the unique identifier for this file, which is supposed to be the same over time and for different bots.
     * This identifier cannot be used to download or reuse the file.
     *
     * @return string The unique file identifier.
     */
    public function getFileUniqueId(): string
    {
        return $this->data['file_unique_id'];
    }

    /**
     * Retrieves the duration of the audio in seconds as defined by the sender.
     *
     * @return int The duration of the audio.
     */
    public function getDuration(): int
    {
        return $this->data['duration'];
    }

    /**
     * Retrieves the MIME type of the file as defined by the sender, if available.
     *
     * @return string|null The MIME type of the file, or null if not available.
     */
    public function getMimeType(): ?string
    {
        return $this->data['mime_type'] ?? null;
    }

    /**
     * Retrieves the file size in bytes, if available. Note that file size can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. However, it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value.
     *
     * @return int|null The file size in bytes, or null if not available.
     */
    public function getFileSize(): ?int
    {
        return $this->data['file_size'] ?? null;
    }
}
