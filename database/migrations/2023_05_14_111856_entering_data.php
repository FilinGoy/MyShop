<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
                ],
                [
                    'title' => 'Весовой',
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
                    'title' => 'Администратор',
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
                    'title' => 'Супер',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Вкуснишка',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Лакомка',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Желейка',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Машуля',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Swetty',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Luxure',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Марс',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'LikeTea',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Lexono',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Наша семья',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Мельниковыч',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Кислинки',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Шипучки',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Соник Бемби',
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
                    'title' => 'Test1',
                    'category_id' => 1,
                    'manufacturer_id' => 1,
                    'expiration_date' => 1,
                    'expiration_type_id' => 1,
                    'article' => 'Test2',
                    'packaging_id' => 1,
                    'ingredients' => 'test3',
                    'weight' => 1,
                    'weight_type_id' => 1,
                    'calorie' => 1,
                    'count' => 1,
                    'price' => 100.00,
                    'description' => 'Test4',
                    'published' => 1,
                    'preview_image' => 'images/main/none.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
            )
        );

        DB::table('users')->insert(
            array(
                [
                    'email' => 'den_suvorov2003@mail.ru',
                    'first_name' => 'Денис',
                    'last_name' => 'Суворов',
                    'login' => 'zMrwuP',
                    'position_id' => 2,
                    'password' => Hash::make('vZUGrH'),
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'email' => 'temp@mail.ru',
                    'first_name' => 'Иван',
                    'last_name' => 'Иванов',
                    'login' => 'test',
                    'position_id' => 1,
                    'password' => Hash::make('test'),
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            )
        );
    }
};
