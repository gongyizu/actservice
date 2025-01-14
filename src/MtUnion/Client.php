<?php

declare(strict_types=1);

namespace Gongyizu\ActService\MtUnion;

use Gongyizu\ActService\Contract\RequestInterface;
use GuzzleHttp\Client as GuzzleHttpClient;

class Client
{
    private $debug = false;

    private $appKey;

    private $secret;

    public function setAppkey($appKey)
    {
        $this->appKey = $appKey;
    }

    /**
     * @param mixed $secret
     */
    public function setSecret($secret): void
    {
        $this->secret = $secret;
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
        $data['appkey'] = $this->appKey;

        $data = SignUtil::sign($data, $this->secret);

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
