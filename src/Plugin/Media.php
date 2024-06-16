<?php

namespace Ispahbod\BotFather\Plugin;

class Media
{
    public static function photo(string $media): array
    {
        return [
            'type' => 'photo',
            'media' => $media,
        ];
    }
    public static function video(string $media): array
    {
        return [
            'type' => 'video',
            'media' => $media,
        ];
    }
    public static function animation(string $media): array
    {
        return [
            'type' => 'animation',
            'media' => $media,
        ];
    }
    public static function audio(string $media): array
    {
        return [
            'type' => 'audio',
            'media' => $media,
        ];
    }
    public static function document(string $media): array
    {
        return [
            'type' => 'document',
            'media' => $media,
        ];
    }
}