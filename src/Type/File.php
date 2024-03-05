<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class File
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

    public function GetFileSize(): string
    {
        return $this->data['file_size'] ?? '';
    }

    public function GetFilePath(): string
    {
        return $this->data['file_path'] ?? '';
    }
}
