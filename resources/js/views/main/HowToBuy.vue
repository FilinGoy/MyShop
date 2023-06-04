<template>
	<div class="row py-3">
		<nav aria-label="breadcrumb" class="col-12">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><router-link to="/">Главная</router-link></li>
				<li class="breadcrumb-item active" aria-current="page">Как купить</li>
			</ol>
		</nav>
    </div>
	<div class="row flex-fill">
		<div class="col-12 bg-white py-5 px-4 px-md-7">
			<div class="mr-lg-8">
				<h1>Как купить</h1>
				<h4>Покупать в интернет-магазине Дом Вкуса очень просто!</h4>
				<p>1. Добавьте из каталога / избранного интересующий Вас товар в корзину.</p>
				<p>2. Перейдите к оформлению заказа. Укажите Ваши контактные данные, выберите дату и время доставки, вариант оплаты.</p>
				<p>3. За 30 мин до назначенного времени вам позвонит курьер уточнит данные и скажет время в течении которого подвезёт заказ.</p>
				<p>4. Получите заказ от курьера и оплатите его.</p>
				<p>4.1. При оплате онлайн, вместо оплаты вам сразу выдадут чек.</p>

				<p>Рекомендуем сохранять чеки!</p>
				<h4>На заметку</h4>
				Чтобы сэкономить время при оформлении последующих заказов и иметь доступ к истории покупок, <router-link class="text-danger" to="/signin">зарегистрируйтесь</router-link> в
				интернет-магазине.

				<p>О сотрудничестве с юридическими лицами/индивидуальными предпринимателями подробнее уточняйте по контактам снизу.</p>
				<hr />
				<p class="text-muted">
					Вопросы можно задать по адресу <a class="text-danger text-nowrap" href="mailto:info@shop.ru">info@shop.ru</a> или по телефону
					<a class="text-danger text-nowrap" href="tel:+78009999999">8 800 999 99 99</a> (7 дней в неделю с 05:00 до 22:00 по ект (GMT+5), для звонков по РФ, звонок бесплатный).
				</p>
			</div>
		</div>
	</div>
</template>
<script>
export default {
	name: "howToBuy",
};
</script>
<style></style>
