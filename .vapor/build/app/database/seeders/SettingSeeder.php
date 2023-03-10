<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'title' => 'Laravel Ecommerce',
            'logo' => 'logo.png',
            'favicon' => 'favicon.png',
            'email' => 'info@site.com',
            'phone' => '01700000000',
            'address' => 'Dhaka, Bangladesh',
            'footer_text' => 'Laravel Ecommerce',
            'powered_by' => 'Laravel Ecommerce',
            'currency' => 'USD',
            'currency_symbol' => '$',
            'currency_position' => 'left',
            'description' => 'Laravel Ecommerce',
        ]);
    }
}
