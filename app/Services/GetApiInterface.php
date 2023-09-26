<?php

namespace App\Services;

use Illuminate\Http\Client\Response;

interface GetApiInterface
{
    /**
     * Function for a get request
     *
     * @param string $url
     * @return Response
     */
    public function getApiRequest(string $url): Response;

}
