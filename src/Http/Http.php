<?php

namespace Ispahbod\BotFather\Http;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use Symfony\Component\Stopwatch\Stopwatch;

class Http
{
    const VERIFY = false;

    public static function Request(string $token, string $method, array $data = []): HttpResponse
    {
        $stopwatch = new Stopwatch();
        $client = new Client();
        $event = $stopwatch->start('request');
        try {
            $response = $client->request("POST", "https://api.telegram.org/bot$token/$method", [
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
            $status_code = $response->getStatusCode();
            $content = $response->getBody()->getContents();
            $data = json_decode($content, true);
        } catch (GuzzleException $error) {

        }
        $event->stop();
        $time = number_format(($stopwatch->getEvent('request')->getDuration() / 1000), 3);
        return new HttpResponse([
            'time' => $time,
            'code' => $status_code ?? 500,
            'content' => $data ?? [],
        ]);
    }
}