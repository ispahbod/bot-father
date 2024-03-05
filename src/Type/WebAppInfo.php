<?php

namespace Ispahbod\BotFather\Type;

use Ispahbod\BotFather\Trait\DataConstructor;

class WebAppInfo
{
    use DataConstructor;

    public function GetUrl(): string
    {
        return $this->data['url'] ?? '';
    }
}
