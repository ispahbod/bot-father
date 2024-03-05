<?php

namespace Ispahbod\BotFather\Http;

use GuzzleHttp\Client;
use GuzzleHttp\Promise\Utils;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\Exception\GuzzleException;
use Ispahbod\BotFather\Constant\Config;
use Symfony\Component\Stopwatch\Stopwatch;

class Async
{
    private Client $client;
    private array $promises;
    private string $token;

    public function __construct(string $token)
    {
        $this->client = new Client();
        $this->token = $token;
    }

    public function Method(string $method, array $data): self
    {
        $worker = Config::WORKER;
        $token = $this->token;
        $this->promises[] = $this->client->requestAsync("POST", "$worker/bot$token/$method", [
            RequestOptions::HEADERS => [
                'content-type' => 'application/json',
            ],
            RequestOptions::JSON => $data,
            RequestOptions::VERIFY => false,
            RequestOptions::TIMEOUT => 10,
            RequestOptions::HTTP_ERRORS => false,
            RequestOptions::ALLOW_REDIRECTS => false,
            RequestOptions::DECODE_CONTENT => true,
        ]);
        return $this;
    }

    public function Send(): AsyncResponse
    {
        try {
            $stopwatch = new Stopwatch();
            $event = $stopwatch->start('request');
            $requests = Utils::settle($this->promises)->wait();
            $event->stop();
            $time = number_format(($stopwatch->getEvent('request')->getDuration() / 1000), 3);
            $responses = [];
            foreach ($requests as $request) {
                if ($request['state'] === 'fulfilled') {
                    $response = $request['value'];
                    $status_code = $response->getStatusCode();
                    $content = $response->getBody()->getContents();
                    $data = json_decode($content, true);
                    $responses[] = [
                        'code' => $status_code ?? 500,
                        'content' => $data ?? [],
                    ];
                } else {
                    $responses[] = null;
                }
            }
            return new AsyncResponse([
                'time' => $time,
                'responses' => $responses,
            ]);
        } catch (GuzzleException) {

        }
    }
}
