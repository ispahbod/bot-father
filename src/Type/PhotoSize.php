<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class PhotoSize
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
     * Retrieves the width of the photo.
     *
     * @return int The photo width.
     */
    public function getWidth(): int
    {
        return $this->data['width'];
    }

    /**
     * Retrieves the height of the photo.
     *
     * @return int The photo height.
     */
    public function getHeight(): int
    {
        return $this->data['height'];
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
