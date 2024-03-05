<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class UserProfilePhotos
{
    use DataConstructor;

    public function GetTotalCount(): int
    {
        return $this->data['total_count'] ?? 0;
    }

    public function GetPhotos(): array
    {
        return array_map(function ($photo) {
            return new PhotoSize($photo);
        }, $this->data['photos'] ?? []);
    }
}
