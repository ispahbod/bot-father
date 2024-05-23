<?php

namespace Ispahbod\BotFather\Http;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use Ispahbod\BotFather\Constant\Config;
use JsonException;
use Symfony\Component\Stopwatch\Stopwatch;

class Http
{
    public const VERIFY = false;

    /**
     * @throws JsonException
     */
    public static function Request(string $token, string $method, array $data = []): HttpResponse
    {
        $stopwatch = new Stopwatch();
        $client = new Client();
        $event = $stopwatch->start('request');
        $worker = Config::WORKER;
        try {
            $response = $client->request("POST", "$worker/bot$token/$method", [
                RequestOptions::JSON => $data,
                RequestOptions::VERIFY => self::VERIFY,
                RequestOptions::TIMEOUT => 10,
                RequestOptions::HTTP_ERRORS => false,
                RequestOptions::DECODE_CONTENT => true,
            ]);
            $status_code = $response->getStatusCode();
            $content = $response->getBody()->getContents();
            $data = json_decode($content, true, 512, JSON_THROW_ON_ERROR);
        } catch (GuzzleException) {

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
