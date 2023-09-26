<?php

namespace Tests\Feature;

use Tests\TestCase;

class CurrencyControllerTest extends TestCase
{

    /**
     * @test
     */
    public function the_end_point_returns_the_correct_data(): void
    {
        $response = $this->getJson(route('currency.australian-dollars'));
        $response->assertSuccessful();
        $this->assertSame($response->json('data.currency'), 'AUD');
    }


    /** @test */
    public function the_structure_is_correct()
    {
        $response = $this->getJson(route('currency.australian-dollars'));
        $response->assertJsonStructure([
            'data' => [
                'currency',
                'exchangeRate'
            ]
        ]);
    }
}
