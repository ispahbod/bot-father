<?php

namespace Ispahbod\BotFather\Http;

class AsyncResponse
{
    public array $responses = [];
    public string $time = '';

    public function __construct($response)
    {
        $this->responses = $response['responses'];
        $this->time = $response['time'];
    }

    public function GetFirst(): HttpResponse
    {
        return new HttpResponse(array_merge($this->responses[0], ['time' => $this->time]));
    }

    public function GetLast(): HttpResponse
    {
        return new HttpResponse(array_merge(end($this->responses), ['time' => $this->time]));
    }

    public function GetAll(): array
    {
        return array_map(function ($response) {
            return new HttpResponse([
                'time' => $this->time,
                'code' => $response['code'] ?? 500,
                'content' => $response['content'] ?? [],
            ]);
        }, $this->responses);
    }

    public function GetCount(): int
    {
        return count($this->responses);
    }

    public function GetEq($eq): HttpResponse
    {
        return new HttpResponse(array_merge($this->responses[$eq], ['time' => $this->time]));
    }

    public function GetTime(): string
    {
        return $this->time;
    }

    public function GetSuccessfulCount(): int
    {
        $counter = 0;
        foreach ($this->responses as $response) {
            if ($response['code'] === 200) {
                $counter++;
            }
        }
        return $counter;
    }

    public function GetUnsuccessfulCount(): int
    {
        $counter = 0;
        foreach ($this->responses as $response) {
            if ($response['code'] !== 200) {
                $counter++;
            }
        }
        return $counter;
    }
}
