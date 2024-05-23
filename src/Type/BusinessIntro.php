<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

final class BusinessIntro
{
    use DataConstructor;

    /**
     * Retrieves the title text of the business intro.
     * This is optional.
     *
     * @return string|null The title text of the business intro, or null if not available.
     */
    public function getTitle(): ?string
    {
        return $this->data['title'] ?? null;
    }

    /**
     * Retrieves the message text of the business intro.
     * This is optional.
     *
     * @return string|null The message text of the business intro, or null if not available.
     */
    public function getMessage(): ?string
    {
        return $this->data['message'] ?? null;
    }

    /**
     * Retrieves the sticker of the business intro.
     * This is optional.
     *
     * @return Sticker|null The sticker of the business intro, or null if not available.
     */
    public function getSticker(): ?Sticker
    {
        return isset($this->data['sticker']) ? new Sticker($this->data['sticker']) : null;
    }
}