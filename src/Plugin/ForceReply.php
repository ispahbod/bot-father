<?php

namespace LaravelBot\BotFather\Plugin;

class ForceReply
{
    public static function Create(array $config): array
    {
        return array_merge(['force_reply' => true], $config);
    }
}
