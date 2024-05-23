<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class WebAppInfo
{
    use DataConstructor;

    /**
     * Retrieves the HTTPS URL of a Web App to be opened with additional data as specified in Initializing Web Apps.
     *
     * @return string The URL of the Web App.
     */
    public function getUrl(): string
    {
        return $this->data['url'] ?? '';
    }
}
