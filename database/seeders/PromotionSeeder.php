<?php

namespace Database\Seeders;

use App\Models\Promotion;
use Illuminate\Database\Seeder;

class PromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['title' => 'Всё включено в стоимость абонемента'],
            ['title' => 'Нет вступительных взносов и скрытых платежей '],
            ['title' => 'Скидка 50% на второго ребёнка '],
            ['title' => 'Скидка 30% при переходе из другого частного детского сада '],
            ['title' => 'Скидка 20% приведи друга'],
            ['title' => 'Перерасчёт оплаты по болезни ребёнка'],
            ['title' => 'Специальные условия для многодетных семей '],
            ['title' => 'Принимаем оплату материнским капиталом '],
        ];

        foreach ($data as $promo) {
            Promotion::create($promo);
        }
    }
}
