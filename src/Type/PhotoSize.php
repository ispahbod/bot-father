<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class PhotoSize
{
    use DataConstructor;

    public function GetFileId(): string
    {
        return $this->data['file_id'] ?? '';
    }

    public function GetFileUniqueId(): string
    {
        return $this->data['file_unique_id'] ?? '';
    }

    public function GetWidth(): int
    {
        return $this->data['width'] ?? 0;
    }

    public function GetHeight(): int
    {
        return $this->data['height'] ?? 0;
    }

    public function GetFileSize(): int
    {
        return $this->data['file_size'] ?? 0;
    }
}
