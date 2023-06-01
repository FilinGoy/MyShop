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

        DB::table('positions')->insert(
            array(
                [
                    'id' => 1,
                    'title' => 'Пользователь',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'id' => 2,
                    'title' => 'Курьер',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'id' => 3,
                    'title' => 'Модератор',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'id' => 4,
                    'title' => 'Директор',
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            )
        );

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
                    'title' => 'Siper',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Vkuska',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Snekus',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Lakomka',
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            )
        );

        DB::table('tags')->insert(
            array(
                [
                    'title' => 'Скидка',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Акция',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Новинка',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Хит',
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            )
        );

        DB::table('country')->insert(
            array(
                [
                    'id' => 1,
                    'name' => 'Россия',
                    'abbreviation' => 'RUS',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'id' => 2,
                    'title' => 'Казахстан',
                    'abbreviation' => 'KAZ',
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            )
        );

        DB::table('manufacturers')->insert(
            array(
                [
                    'name' => 'ООО "Кондитер"',
                    'country_id' => 1,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'ООО "ВкусВилл"',
                    'country_id' => 2,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'ООО "ВкуныйДомик"',
                    'country_id' => 2,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'ОАО "Николевская фабрика"',
                    'country_id' => 1,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'ОАО "Сладкоежка"',
                    'country_id' => 2,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'ИП "Александров И.Н."',
                    'country_id' => 1,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'ИП "Семенов Л.А."',
                    'country_id' => 1,
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            )
        );

        DB::table('products')->insert(
            array(
                [
                    'title' => 'Карамель «Желейка» со вкусом апельсина (упаковка 0,5 кг)',
                    'category_id' => 10,
                    'manufacturer_id' => 1,
                    'expiration_date' => 12,
                    'expiration_type_id' => 3,
                    'article' => 'YK119',
                    'packaging_id' => 1,
                    'ingredients' => 'патока, сахар, регуляторы кислотности: лимонная кислота; агент желирующий: пектины; краситель: экстракт паприки; ароматизатор, концентрированный сок черной моркови. Может содержать диоксид серы, следы молочных продуктов, сои.',
                    'weight' => 500,
                    'weight_type_id' => 1,
                    'calorie' => 360,
                    'count' => 1000,
                    'price' => 100.00,
                    'description' => 'Солнечная карамель с нежной желейной начинкой со вкусом сочного апельсина.',
                    'published' => 1,
                    'preview_image' => 'images/main/none.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Карамель «Вкусняшка» со вкусом лимона (упаковка 1 кг)',
                    'category_id' => 10,
                    'manufacturer_id' => 1,
                    'expiration_date' => 12,
                    'expiration_type_id' => 3,
                    'article' => 'NT259',
                    'packaging_id' => 1,
                    'ingredients' => 'сок',
                    'weight' => 1,
                    'weight_type_id' => 2,
                    'calorie' => 360,
                    'count' => 1000,
                    'price' => 100.00,
                    'description' => 'Солнечная карамель с нежной начинкой со вкусом сочного лимона.',
                    'published' => 1,
                    'preview_image' => 'images/main/vert.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Карамель с начинкой из шоколада (упаковка 1 кг)',
                    'category_id' => 10,
                    'manufacturer_id' => 1,
                    'expiration_date' => 12,
                    'expiration_type_id' => 3,
                    'article' => 'NG227',
                    'packaging_id' => 1,
                    'ingredients' => 'патока, сахар, регуляторы кислотности: лимонная кислота; агент желирующий: пектины; краситель: экстракт паприки; ароматизатор, концентрированный сок черной моркови. Может содержать диоксид серы, следы молочных продуктов, сои.',
                    'weight' => 1,
                    'weight_type_id' => 2,
                    'calorie' => 250,
                    'count' => 100,
                    'price' => 256.00,
                    'description' => 'Солнечная карамель с нежной начинкой со вкусом сочного лимона.',
                    'published' => 0,
                    'preview_image' => 'images/main/horz.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            )
        );

        DB::table('users')->insert(
            array(
                [
                    'first_name' => 'Денис',
                    'last_name' => 'Суворов',
                    'login' => 'fg',
                    'email' => 'den_suvorov2003@mail.ru',
                    'position_id' => 3,
                    'password' => '0000',
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            )
        );
    }
};
