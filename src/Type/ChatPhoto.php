<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

final class ChatPhoto
{
    use DataConstructor;

    /**
     * Retrieves the file identifier of the small (160x160) chat photo.
     * This file_id can be used only for photo download and only for as long as the photo is not changed.
     *
     * @return string The file identifier of the small chat photo.
     */
    public function getSmallFileId(): string
    {
        return $this->data['small_file_id'];
    }

    /**
     * Retrieves the unique file identifier of the small (160x160) chat photo.
     * This identifier is supposed to be the same over time and for different bots and can't be used to download or reuse the file.
     *
     * @return string The unique file identifier of the small chat photo.
     */
    public function getSmallFileUniqueId(): string
    {
        return $this->data['small_file_unique_id'];
    }

    /**
     * Retrieves the file identifier of the big (640x640) chat photo.
     * This file_id can be used only for photo download and only for as long as the photo is not changed.
     *
     * @return string The file identifier of the big chat photo.
     */
    public function getBigFileId(): string
    {
        return $this->data['big_file_id'];
    }

    /**
     * Retrieves the unique file identifier of the big (640x640) chat photo.
     * This identifier is supposed to be the same over time and for different bots and can't be used to download or reuse the file.
     *
     * @return string The unique file identifier of the big chat photo.
     */
    public function getBigFileUniqueId(): string
    {
        return $this->data['big_file_unique_id'];
    }
}
