<?php

namespace LaravelBot\BotFather\Plugin;

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
        $parameter = explode(":", $text);
        if (count($parameter) > 1) {
            $command = $this->findKeyByValue($parameter[0], $this->commands);
            preg_match_all('/(\w+):(\w+)/', $text, $matches);
            $result = array_combine($matches[1], $matches[2]);
            return [$command, $result];
        }
        return [$this->findKeyByValue($text, $this->commands), false];
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
