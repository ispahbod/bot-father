<?php

namespace LaravelBot\BotFather\Http;

use GuzzleHttp\Client;
use GuzzleHttp\Promise\Utils;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\Exception\GuzzleException;
use Symfony\Component\Stopwatch\Stopwatch;

class Async
{
    private Client $client;
    private array $promises;
    const VERIFY = false;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function Request(string $token, string $method, array $data = []): Async
    {
        $worker = "https://worker-late-bush-d074.hamed-hadi10104765.workers.dev";
        $this->promises[] = $this->client->requestAsync("POST", "$worker/bot$token/$method", [
            RequestOptions::HEADERS => [
                'content-type' => 'application/json',
            ],
            RequestOptions::JSON => $data,
            RequestOptions::VERIFY => self::VERIFY,
            RequestOptions::TIMEOUT => 10,
            RequestOptions::HTTP_ERRORS => false,
            RequestOptions::ALLOW_REDIRECTS => false,
            RequestOptions::DECODE_CONTENT => true,
        ]);
        return $this;
    }

    public function Send(): array
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
                    $responses[] = new HttpResponse([
                        'time' => $time,
                        'code' => $status_code ?? 500,
                        'content' => $data ?? [],
                    ]);
                } else {
                    $responses[] = null;
                }
            }
            return $responses;
        } catch (GuzzleException) {
            return [];
        }
    }
}
