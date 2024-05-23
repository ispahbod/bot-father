<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

final class Audio
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
     * Retrieves the performer of the audio as defined by the sender or by audio tags.
     * This is optional.
     *
     * @return string|null The performer of the audio, or null if not available.
     */
    public function getPerformer(): ?string
    {
        return $this->data['performer'] ?? null;
    }

    /**
     * Retrieves the title of the audio as defined by the sender or by audio tags.
     * This is optional.
     *
     * @return string|null The title of the audio, or null if not available.
     */
    public function getTitle(): ?string
    {
        return $this->data['title'] ?? null;
    }

    /**
     * Retrieves the original filename as defined by the sender.
     * This is optional.
     *
     * @return string|null The original filename, or null if not available.
     */
    public function getFileName(): ?string
    {
        return $this->data['file_name'] ?? null;
    }

    /**
     * Retrieves the MIME type of the file as defined by the sender.
     * This is optional.
     *
     * @return string|null The MIME type of the file, or null if not available.
     */
    public function getMimeType(): ?string
    {
        return $this->data['mime_type'] ?? null;
    }

    /**
     * Retrieves the file size in bytes.
     * This is optional and can be bigger than 2^31, but it has at most 52 significant bits,
     * so a signed 64-bit integer or double-precision float type are safe for storing this value.
     *
     * @return int|null The file size in bytes, or null if not available.
     */
    public function getFileSize(): ?int
    {
        return $this->data['file_size'] ?? null;
    }

    /**
     * Retrieves the thumbnail of the album cover to which the music file belongs.
     * This is optional.
     *
     * @return PhotoSize|null The thumbnail, or null if not available.
     */
    public function getThumbnail(): ?PhotoSize
    {
        return isset($this->data['thumbnail']) ? new PhotoSize($this->data['thumbnail']) : null;
    }


}
