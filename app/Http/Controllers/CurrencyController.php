<?php

namespace App\Http\Controllers;

use App\Http\Resources\CurrencyResource;
use App\Services\Currency\CurrencyApiService;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class CurrencyController extends Controller
{
    /**
     * Handle the incoming request.
     * @throws \JsonException
     */
    public function __invoke(Request $request): CurrencyResource
    {
        /**
         *  Tech test notes/feedback
         * 1. API already has a JSON api - Would be better to use that [https://www.floatrates.com/daily/gbp.json] if a real world scenario.
         * 2. Tech test doc specifies that it should use getAustralianDollars as the name but the class only has one method,
         *    So this should be better as an invokable controller?
         *
         */
        return (new CurrencyApiService(config('services.float_rate_api_base').'/daily/gbp.xml'))
            ->getCurrency('AUD');
    }
}
