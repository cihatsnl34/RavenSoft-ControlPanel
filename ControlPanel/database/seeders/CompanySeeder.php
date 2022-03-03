<?php

namespace Database\Seeders;
use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $company = [
            'name' => 'Company',
            'email' => 'company@company.com',
            'phone' => '535213',
            'country' => 'Türkiye',
            'adress' => 'asdasd',
            'province' => 'İstanbul',
            'district' => 'Levent',
            'postCode' => '123123',
            'password' => bcrypt('12345')
        ];
        Company::create($company);
    }
}
