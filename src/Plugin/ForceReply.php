<?php

namespace Ispahbod\BotFather\Plugin;

class ForceReply
{
    public static function create(array $config): array
    {
        return array_merge(['force_reply' => true], $config);
    }
}
