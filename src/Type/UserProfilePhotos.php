<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class UserProfilePhotos
{
    use DataConstructor;

    /**
     * Retrieves the total number of profile pictures the target user has.
     *
     * @return int The total count of profile pictures.
     */
    public function getTotalCount(): int
    {
        return $this->data['total_count'];
    }

    /**
     * Retrieves the requested profile pictures, which are organized in arrays of PhotoSize objects.
     * Each user profile photo is available in up to 4 sizes.
     *
     * @return array An array of arrays, each containing PhotoSize objects.
     */
    public function getPhotos(): array
    {
        $photos = [];
        foreach ($this->data['photos'] as $photoGroup) {
            $group = [];
            foreach ($photoGroup as $photo) {
                $group[] = new PhotoSize($photo);
            }
            $photos[] = $group;
        }
        return $photos;
    }

    public function getFirst(): ?PhotoSizes
    {
        return isset($this->data['photos'][0]) ? new PhotoSizes($this->data['photos'][0]) : null;
    }

    public function getLast(): ?PhotoSizes
    {
        return isset($this->data['photos'][0]) ? new PhotoSizes(end($this->data['photos'])) : null;
    }

    public function getPhotoIndex($index): ?array
    {
        return isset($this->data['photos'][$index]) ? array_map(static function ($photo) {
            return new PhotoSizes($photo);
        }, $this->data['photos'][$index]) : null;
    }
}
