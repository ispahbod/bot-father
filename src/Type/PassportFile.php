<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class PassportFile
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
     * Retrieves the file size in bytes.
     *
     * @return int The file size in bytes.
     */
    public function getFileSize(): int
    {
        return $this->data['file_size'];
    }

    /**
     * Retrieves the Unix time when the file was uploaded.
     *
     * @return int The Unix time when the file was uploaded.
     */
    public function getFileDate(): int
    {
        return $this->data['file_date'];
    }
}