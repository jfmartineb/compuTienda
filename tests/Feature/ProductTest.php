<?php

namespace Tests\Feature;

use App\Models\Product;
use Tests\TestCase;

class ProductTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testMainPage()
    {
        $response = $this->get('/product');

        $response->assertStatus(200);
    }

    public function testProductExists()
    {
        $numProducts = Product::count();
        $this->assertTrue($numProducts >= 1);
    }
}
