<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

final class File
{
    use DataConstructor;
    /**
     * Retrieves the identifier for this file, which can be used to download or reuse the file.
     *
     * @return string The file identifier.
     */
    public function getFileId(): string
    {
        return $this->data['file_id'] ?? '';
    }

    /**
     * Retrieves the unique identifier for this file, which is supposed to be the same over time and for different bots.
     * This identifier cannot be used to download or reuse the file.
     *
     * @return string The unique file identifier.
     */
    public function getFileUniqueId(): string
    {
        return $this->data['file_unique_id'] ?? '';
    }

    /**
     * Retrieves the file size in bytes. Note that file size can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it.
     * However, it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value.
     *
     * @return int|null The file size in bytes or null if not available.
     */
    public function getFileSize(): ?int
    {
        return $this->data['file_size'] ?? null;
    }

    /**
     * Retrieves the file path. Use the format https://api.telegram.org/file/bot<token>/<file_path> to get the file.
     *
     * @return string|null The file path or null if not available.
     */
    public function getFilePath(): ?string
    {
        return $this->data['file_path'] ?? null;
    }

    /**
     * Generates the full URL to download the file using the provided bot token.
     *
     * @param string $token The bot token.
     * @return string|null The full URL to download the file or null if file path is not available.
     */
    public function generateFileUrl(string $token): ?string
    {
        $filePath = $this->getFilePath();
        if ($filePath === null) {
            return null;
        }
        return "https://api.telegram.org/file/bot$token/$filePath";
    }
}
