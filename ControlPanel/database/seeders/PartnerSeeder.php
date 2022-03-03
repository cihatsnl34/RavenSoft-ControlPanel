<?php

namespace Database\Seeders;
use App\Models\Partner;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $partner = [
            'name' => 'Partner',
            'email' => 'partner@partner.com',
            'phone' => '535213',
            'country' => 'Türkiye',
            'adress' => 'asdasd',
            'province' => 'İstanbul',
            'district' => 'Levent',
            'postCode' => '123123',
            'password' => bcrypt('12345')
        ];
        Partner::create($partner);
    }
}
