<?php

namespace Database\Seeders;

use App\Models\Price;
use Illuminate\Database\Seeder;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Полный день',
                'slug' => 'full_day',
                'amount' => '40000',
            ],
            [
                'title' => 'Неполный день',
                'slug' => 'half_full_day',
                'amount' => '25000',
            ],
            [
                'title' => '12 посещений в месяц',
                'slug' => '12_visits',
                'amount' => '30000',
            ],
            [
                'title' => '3 посещения в неделю',
                'slug' => '3_visits',
                'amount' => '7500',
            ],
            [
                'title' => 'Один день',
                'slug' => 'day',
                'amount' => '3000',
            ],
            [
                'title' => 'Половина дня',
                'slug' => 'half',
                'amount' => '2000',
            ],
        ];

        foreach ($data as $price) {
            Price::create($price);
        }
    }
}
