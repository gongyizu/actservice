<?php

declare(strict_types=1);

namespace Gongyizu\ActService\JuTuike;

use Gongyizu\ActService\Contract\RequestInterface;
use GuzzleHttp\Client as GuzzleHttpClient;

class Client
{
    private $debug = false;

    private $apiKey;

    public function setApikey($apikey)
    {
        $this->apiKey = $apikey;
    }

    public function setDebug($debug)
    {
        $this->debug = $debug;
    }

    public function execute(RequestInterface $request)
    {
        $url = $request->getApiMethodName();
        $data = $request->getApiParams();

        $result = $this->http($url, $data);
        return $request->getResult($result);
    }

    private function http($url, $data, $header = [])
    {
        $header['Accept'] = 'application/json';
        $data['apikey'] = $this->apiKey;
        $url .= '?' . http_build_query($data);

        $client = new GuzzleHttpClient([
            'timeout' => 20,
        ]);

        $response = $client->get($url, [
            'debug' => $this->debug,
            'headers' => $header,
        ]);

        return $response->getBody()->getContents();
    }
}
