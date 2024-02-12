<?php

namespace LaravelBot\BotFather\Plugin;

class Localization
{
    private array $locates = [];
    private array $translations = [];
    private array $fields = [];
    private string $active_locate;

    public function Locate($locate, $array): void
    {
        $this->locates[] = $locate;
        foreach ($array as $field => $value) {
            $this->fields[] = $field;
            $this->translations[$locate][$field] = $value;
        }
    }

    public function Lang($key, $locate = null): string
    {
        return $this->translations[$locate ?: $this->active_locate][$key] ?? '';
    }

    public function ActiveLocate($locate): Localization
    {
        $this->active_locate = $locate;
        return $this;
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
