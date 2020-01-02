<?php

use Illuminate\Database\Seeder;
use App\Models\GeneralSettingsTableModel;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GeneralSettingsTableSeeder::class);
    }
}
