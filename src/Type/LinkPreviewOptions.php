<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

final class LinkPreviewOptions
{
    use DataConstructor;

    /**
     * Determines if the link preview is disabled.
     *
     * @return bool|null True if the link preview is disabled, otherwise false or null if not set.
     */
    public function isDisabled(): ?bool
    {
        return $this->data['is_disabled'] ?? null;
    }

    /**
     * Retrieves the URL to use for the link preview.
     *
     * @return string|null URL for the link preview or null if not set.
     */
    public function getUrl(): ?string
    {
        return $this->data['url'] ?? null;
    }

    /**
     * Determines if the media in the link preview is supposed to be shrunk.
     *
     * @return bool|null True if the media is to be shrunk, otherwise false or null if not set or not applicable.
     */
    public function preferSmallMedia(): ?bool
    {
        return $this->data['prefer_small_media'] ?? null;
    }

    /**
     * Determines if the media in the link preview is supposed to be enlarged.
     *
     * @return bool|null True if the media is to be enlarged, otherwise false or null if not set or not applicable.
     */
    public function preferLargeMedia(): ?bool
    {
        return $this->data['prefer_large_media'] ?? null;
    }

    /**
     * Determines if the link preview must be shown above the message text.
     *
     * @return bool|null True if the link preview is shown above the message text, otherwise false or null if not set.
     */
    public function showAboveText(): ?bool
    {
        return $this->data['show_above_text'] ?? null;
    }
}
