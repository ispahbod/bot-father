<?php

namespace Ispahbod\BotFather\Plugin;

use Ispahbod\UrlManager\UrlManager;

class Commands
{
    private array $commands = [];

    public function SetCommand($command, $value = null): Commands
    {
        $this->commands[$command] = empty($value) ? $command : $value;
        return $this;
    }

    public function CreateCommand($command, $parameters = []): string
    {
        if (empty($parameters)) {
            return "$command";
        }
        $text = "";
        foreach ($parameters as $key => $parameter) {
            $text .= '{'."$key:$parameter".'}';
        }
        return "$command:$text";
    }

    public function SetCommands($commands): Commands
    {
        foreach ($commands as $key => $command) {
            $this->commands[$key] = $command;
        }
        return $this;
    }
    public function GetCommand($text): array
    {
        if (UrlManager::isValidUrl($text)){
            return [$text, null];
        }
        $parameter = explode(":", $text);
        if (count($parameter) > 1) {
            $matches = [];
            $command=$parameter[0];
            preg_match_all('/{([^}]+)}/', $text, $matches);
            $parameters = $matches[1];
            $result = [];
            foreach ($parameters as $parameter) {
                $parts = explode(':', $parameter);
                $key = $parts[0];
                $value = $parts[1];
                $result[$key] = $value;
            }
            return [$command,$result];
        }
        return [$this->findKeyByValue($text, $this->commands), null];
    }
    private function findKeyByValue($searchValue, $array): string|null
    {
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $result = $this->findKeyByValue($searchValue, $value);
                if ($result !== null) {
                    return $key;
                }
            } elseif ($value === $searchValue) {
                return $key;
            }
        }
        return null;
    }
}
