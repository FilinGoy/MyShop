<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Готовые данные

        DB::table('categories')->insert(
            array(
                [
                    'title' => 'Вафли',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Печенье',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Крекер',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Сухие завтраки',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Тараллини',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Пряники',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Круассаны',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Бисквиты, рулеты, кексы',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Конфеты',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Карамель',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Драже',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Шоколад',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Шоколадная и арахисовая паста',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Батончики',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Зефир, мармелад',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Халва, козинаки',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Сушеные фрукты',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Соки и нектары',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Чай',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Кофе, какао',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Жевательная резинка',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Ирис, гематоген',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Семечки',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Сухарики и гренки',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Соусы, кетчупы, майонезы',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Чипсы и попкорн',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Орехи, мясо, рыба',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Макаронные изделия',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Консервация',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Оливковое масло, оливки, маслины',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Супы и бульоны',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Смеси для десертов, специи, приправы',
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            )
        );

        DB::table('brands')->insert(
            array(
                [
                    'title' => 'ООО "Кондитер"',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'ООО "ВкусВилл"',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'ООО "ВкуныйДомик"',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'ОАО "Николевская фабрика"',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'ОАО "Сладкоежка"',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'ИП "Александров И.Н."',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'ИП "Семенов Л.А."',
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            )
        );

        DB::table('tags')->insert(
            array(
                [
                    'title' => 'Содержащее заменитель сахара',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Без консервантов',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Острое',
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            )
        );

        // Типы данных

        DB::table('payment_types')->insert(
            array(
                [
                    'title' => 'Наличными средствами',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Банковской картой (при получении)',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Оплата онлайн',
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            )
        );

        DB::table('statuses')->insert(
            array(
                [
                    'title' => 'В обработке',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Ожидает подтверждения',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Новый',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Оплачен',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'В доставке',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Выполнен',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Отменён',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Возврат',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Утерян',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Удалён',
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            )
        );

        DB::table('time_types')->insert(
            array(
                [
                    'title' => 'ч.',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'дн.',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'мес.',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'г.',
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            )
        );

        DB::table('weight_types')->insert(
            array(
                [
                    'title' => 'г',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'кг',
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            )
        );

        DB::table('packaging_types')->insert(
            array(
                [
                    'title' => 'Фасованный',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Бумага',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Упаковка',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Плёнка',
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            )
        );
    }

    /*
    public function down(): void
    {
        Schema::dropIfExists('admins');
    } */
};
