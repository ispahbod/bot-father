<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

final class InputMediaVideo
{
    use DataConstructor;

    /**
     * Retrieves the type of the result.
     *
     * @return string Type of the result, must be video.
     */
    public function getType(): string
    {
        return 'video';
    }

    /**
     * Retrieves the file to send.
     *
     * @return string File to send.
     */
    public function getMedia(): string
    {
        return $this->data['media'];
    }

    /**
     * Retrieves the thumbnail of the video.
     *
     * @return string|null Thumbnail of the video if available, otherwise null.
     */
    public function getThumbnail(): ?string
    {
        return $this->data['thumbnail'] ?? null;
    }

    /**
     * Retrieves the caption of the video.
     *
     * @return string|null Caption of the video if available, otherwise null.
     */
    public function getCaption(): ?string
    {
        return $this->data['caption'] ?? null;
    }

    /**
     * Retrieves the parse mode for entities in the video caption.
     *
     * @return string|null Parse mode if available, otherwise null.
     */
    public function getParseMode(): ?string
    {
        return $this->data['parse_mode'] ?? null;
    }

    /**
     * Retrieves the list of special entities that appear in the caption.
     *
     * @return array|null List of MessageEntity if available, otherwise null.
     */
    public function getCaptionEntities(): ?array
    {
        return $this->data['caption_entities'] ?? null;
    }

    /**
     * Retrieves the width of the video.
     *
     * @return int|null Video width if available, otherwise null.
     */
    public function getWidth(): ?int
    {
        return $this->data['width'] ?? null;
    }

    /**
     * Retrieves the height of the video.
     *
     * @return int|null Video height if available, otherwise null.
     */
    public function getHeight(): ?int
    {
        return $this->data['height'] ?? null;
    }

    /**
     * Retrieves the duration of the video in seconds.
     *
     * @return int|null Duration of the video if available, otherwise null.
     */
    public function getDuration(): ?int
    {
        return $this->data['duration'] ?? null;
    }

    /**
     * Checks if the video is suitable for streaming.
     *
     * @return bool True if the video supports streaming, otherwise false.
     */
    public function supportsStreaming(): bool
    {
        return $this->data['supports_streaming'] ?? false;
    }

    /**
     * Checks if the video needs to be covered with a spoiler animation.
     *
     * @return bool True if the video has a spoiler, otherwise false.
     */
    public function hasSpoiler(): bool
    {
        return $this->data['has_spoiler'] ?? false;
    }
}
