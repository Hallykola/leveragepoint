<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Employees::factory(110)->create();
        // \App\Models\ChangeOwnershipRequests::factory(110)->create();
        // \App\Models\Companies::factory(110)->create();
        \App\Models\LicenceAmmendentRequest::factory(110)->create();
        // \App\Models\LicenceRenewalRequest::factory(110)->create();
    }
}
