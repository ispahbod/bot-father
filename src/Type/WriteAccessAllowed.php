<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class WriteAccessAllowed
{
    use DataConstructor;

    /**
     * Determines if the access was granted after the user accepted an explicit request from a Web App sent by the method requestWriteAccess.
     *
     * @return bool|null True if the access was granted after the request, null if the information is not available.
     */
    public function isFromRequest(): ?bool
    {
        return $this->data['from_request'] ?? null;
    }

    /**
     * Retrieves the name of the Web App, if the access was granted when the Web App was launched from a link.
     *
     * @return string|null The name of the Web App, or null if not available.
     */
    public function getWebAppName(): ?string
    {
        return $this->data['web_app_name'] ?? null;
    }

    /**
     * Determines if the access was granted when the bot was added to the attachment or side menu.
     *
     * @return bool|null True if the access was granted via the attachment or side menu, null if the information is not available.
     */
    public function isFromAttachmentMenu(): ?bool
    {
        return $this->data['from_attachment_menu'] ?? null;
    }
}
