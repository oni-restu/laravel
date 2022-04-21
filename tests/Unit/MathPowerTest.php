<?php

namespace Tests\Unit;

use App\Helper\MathHelper;
use PHPUnit\Framework\TestCase;

class MathPowerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_bilangan_positif()
    {
        $p = MathHelper::pangkat(2, 3);
        $this->assertTrue($p == 8);
    }

    public function test_bilangan_negatif()
    {
        $p = MathHelper::pangkat(2, -3);
        $this->assertTrue($p == (1 / 8));
    }
}
