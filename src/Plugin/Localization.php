<?php

namespace Ispahbod\BotFather\Plugin;

class Localization
{
    private array $locates = [];
    private array $translations = [];
    private array $fields = [];
    private string $active_locate = 'global';

    public function get($key, $locate = null, $parameters = []): string
    {
        $locate = empty($locate) ? $this->active_locate : $locate;
        $message = $this->translations[$locate][$key] ?? $this->translations['global'][$key] ?? '';
        $i = 0;
        $message = preg_replace_callback('/::\w+/', function ($matches) use ($parameters, &$i) {
            return $parameters[$i++] ?? '-';
        }, $message);
        return $message;
    }

    public function setLocate($locate, $array): self
    {
        $this->locates[] = $locate;
        foreach ($array as $field => $value) {
            $this->fields[] = $field;
            $this->translations[$locate][$field] = $value;
        }
        return $this;
    }

    public function setLocates($locates): self
    {
        foreach ($locates as $locate => $array) {
            $this->locates[] = $locate;
            foreach ($array as $field => $value) {
                $this->fields[] = $field;
                $this->translations[$locate][$field] = $value;
            }
        }
        return $this;
    }

    public function setGlobalLocate($array): self
    {
        foreach ($array as $field => $value) {
            $this->fields[] = $field;
            $this->translations['global'][$field] = $value;
        }
        return $this;
    }

    public function activeLocate($locate): Localization
    {
        $this->active_locate = $locate;
        return $this;
    }

    public function getActiveLocate(): string
    {
        return $this->active_locate;
    }

    public function getFieldTranslations($key): array
    {
        $array = [];
        foreach ($this->locates as $locate) {
            $array[] = $this->translations[$locate][$key];
        }
        return $array;
    }

    public function getLocates(): array
    {
        return array_filter($this->locates, function ($value){
            return $value !== "global";
        });
    }

    public function getFields(): array
    {
        return $this->fields;
    }
}
