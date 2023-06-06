<template>
	<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 g-3">
		<template v-if="products">
			<template v-for="product in products" :key="product.id">
				<div class="col" v-if="product.published">
					<div class="card card-fill border-0" style="min-height: 350px;">
						<div class="card-image">
							<router-link :to="`/product/${product.id}`">
								<img :src="product.preview_image ?? 'storage/images/main/none.png'" class="card-img-top" />
							</router-link>
						</div>
						<div class="card-body p-3 p-lg-4">
							<div class="d-flex justify-content-evenly align-items-center text-center">
								<div>
									<p class="card-title mb-1">
										<a :href="`/product/${product.id}`">
											{{ product.title }}
										</a>
									</p>
									<small class="text-muted">
										<span>{{ product.price }} ₽</span>
									</small>
								</div>
								<div>
									<a :href="`/product/${product.id}`" class="d-inline-block" data-toggle="tooltip" data-placement="top" title="Add to cart">
										<i class="icon icon-cart font-size-xl"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</template>
		</template>
	</div>
</template>
<script>
export default {
	name: "recommendProducts",
/* 	data() {
		return {
			products: [],
		};
	},
	mounted() {
		this.getProducts();
	},
	methods: {
        getProducts() {
			this.axios.post("../../api/products").then((res) => {
				this.products = res.data.data;
			});
		},
	}, */
};
</script>
<style></style>
