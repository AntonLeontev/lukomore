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
                'amount' => '40000',
                'price_per_month' => true,
                'weekdays' => 'Пн-Пт',
                'hours' => '8:00 - 19:00',
                'or_hours' => '',
                'contains' => "4х разовое питание\n2 прогулки\nдневной отдых\nигровая деятельность\nинтегрированные и комплексные занятия в группе по возрасту ребёнка\nдополнительные занятия",
                'color_id' => 1,
                'enabled' => true,
                'position' => 1,
            ],
            [
                'title' => 'Неполный день',
                'amount' => '25000',
                'price_per_month' => true,
                'weekdays' => 'Пн-Пт',
                'hours' => '8:00 - 13:00',
                'or_hours' => '14:00 - 19:00',
                'contains' => "2х разовое питание\n1 прогулка\nигровая деятельность\nинтегрированные и комплексные занятия в группе по возрасту ребёнка",
                'color_id' => 2,
                'enabled' => true,
                'position' => 2,
            ],
            [
                'title' => '12 посещений в месяц',
                'amount' => '30000',
                'price_per_month' => true,
                'weekdays' => 'Пн-Пт',
                'hours' => '8:00 - 19:00',
                'or_hours' => '',
                'contains' => "4х разовое питание\n2 прогулки\nдневной отдых\nигровая деятельность\nинтегрированные и комплексные занятия в группе по возрасту ребёнка\nдополнительные занятия",
                'color_id' => 3,
                'enabled' => true,
                'position' => 3,
            ],
            [
                'title' => '3 посещения в неделю',
                'amount' => '7500',
                'price_per_month' => true,
                'weekdays' => 'Пн-Пт',
                'hours' => '8:00 - 19:00',
                'or_hours' => '',
                'contains' => "4х разовое питание\n2 прогулки\nдневной отдых\nигровая деятельность\nинтегрированные и комплексные занятия в группе по возрасту ребёнка\nдополнительные занятия",
                'color_id' => 4,
                'enabled' => true,
                'position' => 4,
            ],
            [
                'title' => 'Один день',
                'amount' => '3000',
                'price_per_month' => false,
                'weekdays' => 'Пн-Пт',
                'hours' => '8:00 - 19:00',
                'or_hours' => '14:00 - 19:00',
                'contains' => "4х разовое питание\n2 прогулки\nдневной отдых\nигровая деятельность\nинтегрированные и комплексные занятия в группе по возрасту ребёнка\nдополнительные занятия",
                'color_id' => 5,
                'enabled' => true,
                'position' => 5,
            ],
            [
                'title' => 'Половина дня',
                'amount' => '2000',
                'price_per_month' => false,
                'weekdays' => 'Пн-Пт',
                'hours' => '8:00 - 13:00',
                'or_hours' => '14:00 - 19:00',
                'contains' => "2х разовое питание\n1 прогулка\nигровая деятельность\nинтегрированные и комплексные занятия в группе по возрасту ребёнка",
                'color_id' => 6,
                'enabled' => true,
                'position' => 6,
            ],
        ];

        foreach ($data as $price) {
            Price::create($price);
        }
    }
}
