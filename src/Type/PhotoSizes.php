<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class PhotoSizes
{
    use DataConstructor;

    /**
     * Retrieves the small size photo details.
     *
     * @return PhotoSize The small size photo.
     */
    public function getSmallSize(): PhotoSize
    {
        return new PhotoSize($this->data[0]);
    }

    /**
     * Retrieves the medium size photo details.
     *
     * @return PhotoSize The medium size photo.
     */
    public function getMediumSize(): PhotoSize
    {
        return new PhotoSize($this->data[1]);
    }

    /**
     * Retrieves the large size photo details.
     *
     * @return PhotoSize The large size photo.
     */
    public function getLargeSize(): PhotoSize
    {
        return new PhotoSize($this->data[2]);
    }
}
