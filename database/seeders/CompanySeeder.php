<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $company = \App\Models\Company::factory()->create();

        \App\Models\Offer::factory(3)->create([
            'company_id' => $company->id,
        ]);
    }
}
