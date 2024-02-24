<?php

namespace LaravelBot\BotFather\Plugin;

class Localization
{
    private array $locates = [];
    private array $translations = [];
    private array $fields = [];
    private string $active_locate = 'global';

    public function Locate($locate, $array): void
    {
        $this->locates[] = $locate;
        foreach ($array as $field => $value) {
            $this->fields[] = $field;
            $this->translations[$locate][$field] = $value;
        }
    }

    public function Global($array): void
    {
        foreach ($array as $field => $value) {
            $this->fields[] = $field;
            $this->translations['global'][$field] = $value;
        }
    }

    public function Lang($key, $locate = null): string
    {
        $locate = empty($locate) ? $this->active_locate : $locate;
        return $this->translations[$locate][$key] ?? $this->translations['global'][$key] ?? '';
    }

    public function ActiveLocate($locate): Localization
    {
        $this->active_locate = $locate;
        return $this;
    }
    public function GetActiveLocate(): string
    {
        return $this->active_locate;
    }

    public function GetFieldTranslations($key): array
    {
        $array = [];
        foreach ($this->locates as $locate) {
            $array[] = $this->translations[$locate][$key];
        }
        return $array;
    }

    public function GetLocates(): array
    {
        return $this->locates;
    }

    public function GetFields(): array
    {
        return $this->fields;
    }
}
