<?php

namespace LaravelBot\BotFather\Type;

use LaravelBot\BotFather\Trait\DataConstructor;

class WebAppInfo
{
    use DataConstructor;

    public function GetUrl(): string
    {
        return $this->data['url'] ?? '';
    }
}