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
                    'title' => '«Cornline», зерновой батончик с кокосом, 30 г',
                    'category_id' => 14,
                    'brand_id' => 2,
                    'manufacturer_id' => 3,
                    'expiration_date' => 6,
                    'expiration_type_id' => 3,
                    'article' => 'BK427',
                    'packaging_id' => 1,
                    'ingredients' => 'глюкозные сиропы, кокосовая стружка (кокосовая стружка, консервант: диоксид серы); мука рисовая, сахар, крупа кукурузная; мальтодекстрин поршкообразный, заменитель масла какао (пальмоядровое масло, эмульгаторы: сорбитан тристеарат, соевый лецитин); хлопья овсяные, хлопья ячменные, масло растительное, мука пшеничная, влагоудерживающий агент: сорбитовый сироп; сыворотка сухая молочная деминерализованная, какао-порошок, соль, ароматизаторы, эмульгаторы: Е322 (соевый), Е476. Может содержать продукты яичные, арахис, орехи.',
                    'weight' => 30,
                    'weight_type_id' => 1,
                    'count' => 1000,
                    'price' => 11.20,
                    'description' => 'Батончики из цельных злаков с натуральной кокосовой стружкой и воздушным рисом. Благодаря сбалансированному составу, батончик - отличный вариант для перекуса во время учебы или работы.',
                    'published' => 1,
                    'preview_image' => 'images/main/vert.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Text',
                    'category_id' => 2,
                    'manufacturer_id' => 3,
                    'expiration_date' => 1,
                    'expiration_type_id' => 4,
                    'article' => 'AK287',
                    'ingredients' => 'Крахмал',
                    'calorie' => 300,
                    'count' => 0,
                    'price' => 12.55,
                    'description' => 'Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test',
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
