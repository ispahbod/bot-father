<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

final class InputMediaAnimation
{
    use DataConstructor;

    /**
     * Retrieves the type of the result, which must be 'animation'.
     *
     * @return string The type of the result.
     */
    public function getType(): string
    {
        return 'animation';
    }

    /**
     * Retrieves the file to send.
     *
     * @return string The file identifier, URL, or attached file name.
     */
    public function getMedia(): string
    {
        return $this->data['media'];
    }

    /**
     * Retrieves the optional thumbnail of the file sent.
     *
     * @return string|null The thumbnail file identifier or URL, or null if not available.
     */
    public function getThumbnail(): ?string
    {
        return $this->data['thumbnail'] ?? null;
    }

    /**
     * Retrieves the optional caption of the animation.
     *
     * @return string|null The caption of the animation, or null if not available.
     */
    public function getCaption(): ?string
    {
        return $this->data['caption'] ?? null;
    }

    /**
     * Retrieves the optional mode for parsing entities in the animation caption.
     *
     * @return string|null The parse mode, or null if not available.
     */
    public function getParseMode(): ?string
    {
        return $this->data['parse_mode'] ?? null;
    }

    /**
     * Retrieves the optional list of special entities that appear in the caption.
     *
     * @return array|null The list of message entities, or null if not available.
     */
    public function getCaptionEntities(): ?array
    {
        return $this->data['caption_entities'] ?? null;
    }

    /**
     * Retrieves the optional width of the animation.
     *
     * @return int|null The width of the animation, or null if not available.
     */
    public function getWidth(): ?int
    {
        return $this->data['width'] ?? null;
    }

    /**
     * Retrieves the optional height of the animation.
     *
     * @return int|null The height of the animation, or null if not available.
     */
    public function getHeight(): ?int
    {
        return $this->data['height'] ?? null;
    }

    /**
     * Retrieves the optional duration of the animation in seconds.
     *
     * @return int|null The duration of the animation, or null if not available.
     */
    public function getDuration(): ?int
    {
        return $this->data['duration'] ?? null;
    }

    /**
     * Retrieves whether the animation needs to be covered with a spoiler.
     *
     * @return bool|null True if the animation needs a spoiler, or null if not specified.
     */
    public function hasSpoiler(): ?bool
    {
        return $this->data['has_spoiler'] ?? null;
    }
    public function getEffectId(): ?string
    {
        return $this->data['effect_id'] ?? null;
    }
}
