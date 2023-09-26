<?php

namespace App\Services\Currency;

use App\Http\Resources\CurrencyResource;
use App\Services\BaseGetApiService;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class CurrencyApiService extends BaseGetApiService
{
    /**
     * Gets a currency from a selected currency code.
     *
     * @throws \JsonException
     */
    public function getCurrency(string $currencyCode): CurrencyResource
    {
        // Formats the string to uppercase
        $currencyCode = Str::upper($currencyCode);

        // Gets the xml request and body
        $xmlBody = $this
            ->getApiRequest($this->url)
            ->body();

        // Parses the XML to an array and turns into a collection
        $itemsCollection = collect($this->parseXmlToArray($xmlBody)['item']);

        $items = $this->filterByCurrencyCode($itemsCollection, $currencyCode);

        if (!$items->count()) {
            throw new \JsonException("The Currency Code doesn't exist.");
        }

        return new CurrencyResource($items->first());
    }

    /**
     * Filters a collection for a currency code.
     *
     * @param Collection $items
     * @param string $currencyCode
     * @return Collection
     */
    protected function filterByCurrencyCode(Collection $items, string $currencyCode): Collection
    {
        return $items->filter(function ($item) use ($currencyCode) {
            return $item['targetCurrency'] === $currencyCode;
        })->values();
    }

}
