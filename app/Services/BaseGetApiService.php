<?php

namespace App\Services;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class BaseGetApiService implements GetApiInterface
{
    /**
     * @var string
     */
    public string $url;

    /**
     * The construct method
     *
     * @param string $url
     */
    public function __construct(string $url)
    {
        $this->url = $url;
    }

    /**
     * Performs a get request for a URL
     *
     * @param string $url
     * @return Response
     */
    public function getApiRequest(string $url): Response
    {
        return Http::get($url);
    }

    /**
     * Parses an XML file to an array.
     *
     * @param string $xml
     * @return array
     * @throws \JsonException
     */
    protected function parseXmlToArray(string $xml): array
    {
        // @todo - Reformat this
        return json_decode(
            json_encode(
                simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA)
                , JSON_THROW_ON_ERROR
            )
            , true);
    }
}
