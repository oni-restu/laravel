<?php

namespace Tests\Feature;

use App\Models\Pelanggan;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;



class PelangganTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_create_data_masuk()
    {
        $countAwal = Pelanggan::count();
        $response = $this->postJson('/api/pelanggan', [
            "nama" => "Agung",
            "kelamin" => "L",
            "phone" => "0819292020",
            "alamat" => "Semarang"
        ]);
        $countAkhir = Pelanggan::count();

        $this->assertTrue($countAkhir == $countAwal + 1);
    }
}
