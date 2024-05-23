<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class VideoNote
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
     * Retrieves the video width and height (diameter of the video message) as defined by the sender.
     *
     * @return int The length of the video note.
     */
    public function getLength(): int
    {
        return $this->data['length'];
    }

    /**
     * Retrieves the duration of the video in seconds as defined by the sender.
     *
     * @return int The duration of the video.
     */
    public function getDuration(): int
    {
        return $this->data['duration'];
    }

    /**
     * Retrieves the optional video thumbnail.
     *
     * @return PhotoSize|null The video thumbnail, or null if not available.
     */
    public function getThumbnail(): ?PhotoSize
    {
        return isset($this->data['thumbnail']) ? new PhotoSize($this->data['thumbnail']) : null;
    }

    /**
     * Retrieves the file size in bytes, if available.
     *
     * @return int|null The file size in bytes, or null if not available.
     */
    public function getFileSize(): ?int
    {
        return $this->data['file_size'] ?? null;
    }
}
