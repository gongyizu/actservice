<?php

declare(strict_types=1);

namespace Gongyizu\ActService\Eleme;

use Gongyizu\ActService\Contract\RequestInterface;
use GuzzleHttp\Client as GuzzleHttpClient;

class Client
{
    private $debug = false;

    private $appKey;

    private $secret;

    /**
     * API协议版本，可选值：2.0.
     * @var string
     */
    private $version = '2.0';

    /**
     * 是否采用精简JSON返回格式，仅当format=json时有效，默认值为：0.
     * @var int
     */
    private $simplify = 0;

    /**
     * 签名的摘要算法，可选值为：hmac，md5，hmac-sha256.
     * @var string
     */
    private $signMethod = 'md5';

    /**
     * 响应格式。默认为json格式，可选值：xml，json.
     * @var string
     */
    private $format = 'json';

    /**
     * 用户登录授权成功后，TOP颁发给应用的授权信息.
     * @var string
     */
    private $session;

    public function execute(RequestInterface $request)
    {
        $url = $request->getApiMethodName();
        $data = $request->getApiParams();

        $result = $this->http($url, $data);
        return $request->getResult($result);
    }

    public function setAppkey($appKey): void
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

    public function setDebug($debug): void
    {
        $this->debug = $debug;
    }

    public function setVersion($version): void
    {
        $this->version = $version;
    }

    public function setSimplify(int $simplify): void
    {
        $this->simplify = $simplify;
    }

    public function setFormat(string $format): void
    {
        $this->format = $format;
    }

    public function setSession(string $session): void
    {
        $this->session = $session;
    }

    private function http($url, $serviceParams, $header = [])
    {
        $method = $serviceParams['method'];
        unset($serviceParams['method']);

        // 公共参数
        $commonParams = [
            'method' => $method,
            'app_key' => $this->appKey,
            'timestamp' => date('Y-m-d H:i:s'),
            'v' => $this->version,
            'sign_method' => $this->signMethod,
            'format' => $this->format,
            'simplify' => '' . $this->simplify,
        ];

        if (!is_null($this->session)) {
            $commonParams['session'] = $this->session;
        }

        // 待签名参数
        $params = array_merge($commonParams, $serviceParams);
        $sign = SignUtil::sign($params, $this->secret, $this->signMethod);
        $commonParams['sign'] = $sign;

        $header['Accept'] = 'application/json';

        $url .= '?' . http_build_query($commonParams);

        $client = new GuzzleHttpClient([
            'timeout' => 20,
        ]);

        $response = $client->post($url, [
            'debug' => $this->debug,
            'headers' => $header,
            'form_params' => $serviceParams,
        ]);

        return $response->getBody()->getContents();
    }
}
