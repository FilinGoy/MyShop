<template>
    <div class="row">
        <nav aria-label="breadcrumb" class="col-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><router-link to="/">Главная</router-link></li>
                <li class="breadcrumb-item active" aria-current="page">Контакты</li>
            </ol>
        </nav>

        <div class="col-12 bg-white py-5 px-md-7">
            <div class="mr-lg-8">
                    <h1>Администрация интернет-магазина «Дом Вкуса»</h1>
                    <h5>ООО «Дом Вкуса»</h5>
                    <p class="text-wrap">
                        ИНН 7999999999 /
                        КПП 999999999 <br>
                        ОГРН 1999999999999 <br>

                        Юридический адрес: 454136, Челябинск, Калининский район, ​Молодогвардейцев, 31 к1, 9999 офис <br>
                        Фактический адрес: 454136, Челябинск, Калининский район, ​Молодогвардейцев, 31 к1, 9999 офис.
                    </p>

                    <h5>Режим работы</h5>
                    <p>В будние дни с 6:00 до 14:00 по ект (GMT+5)</p>
                <h5>Контактные данные</h5>
                <p>Вопросы можно задать по адресу <a class="text-danger text-nowrap" href="mailto:info@shop.ru">info@shop.ru</a> или по телефону <a class="text-danger text-nowrap" href="tel:+78009999999">8 800 999 99 99</a> (7 дней в неделю с 05:00 до 22:00 по ект (GMT+5), для звонков по РФ, звонок бесплатный).</p>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: 'contacts'
}
</script>
<style>

</style>
