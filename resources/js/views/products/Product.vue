<template>
    <div>
                <!-- Content -->

        <section class="bg-white p-0 sider sider-right">
            <div class="container">
                <div class="row align-items-lg-center">

                    <!-- Product gallery -->

                    <div class="col-lg-7 bg-white">

                        <div class="owl-carousel" data-items="1" data-nav="false" data-margin="15" data-dots="true">
                            <img src="assets/images/templates/clothing/shoe-1.jpg" alt="Product image" />
                            <img src="assets/images/templates/clothing/shoe-1a.jpg" alt="Product image" />
                        </div>
                    </div>

                    <!-- Product info -->

                    <div class="col-lg-5 pl-lg-6 pl-xl-7">
                        <div class="px-lg-4 py-6">

                            <!-- Product order -->

                            <div class="clearfix">

                                <!-- Product price -->

                                <div class="h2 mb-0">
                                    <span>{{ product.title }}</span> <br> <br>
                                    <span>Цена: {{ product.price }} ₽</span>
                                </div>

                                <hr />

                                <!-- Product brand -->

                                <div class="row">
                                    <div class="col-6 col-lg-12">
                                        <div class="row mb-2">
                                            <div class="col-xl-4">
                                                <span class="text-muted">Manifacturer</span>
                                            </div>
                                            <div class="col-xl-8">Sony</div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-12">
                                        <div class="row mb-2">
                                            <div class="col-xl-4">
                                                <span class="text-muted">Materials</span>
                                            </div>
                                            <div class="col-xl-8">Plastic, Leather</div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-12">
                                        <div class="row mb-2">
                                            <div class="col-xl-4">
                                                <span class="text-muted">Shipping</span>
                                            </div>
                                            <div class="col-xl-8">
                                                <i class="icon icon-checkmark-circle"></i> Free shipping
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-12">
                                        <div class="row mb-2">
                                            <div class="col-xl-4">
                                                <span class="text-muted">Availability</span>
                                            </div>
                                            <div class="col-xl-8">
                                                <i class="icon icon-checkmark-circle"></i> In stock
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr/>

                                <!-- Product quantity -->

                                <div class="mb-2">
                                    <div class="row">
                                        <div class="col-5">
                                            <input type="number" class="form-control mr-2" value="1">
                                        </div>
                                        <div class="col-7">
                                            <button class="btn btn-block btn-primary">
                                                <i class="icon icon-cart"></i> Add to cart
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <hr />

                            </div>

                            <!-- Add to basket -->

                            <div class="btn-group w-100">
                                <span class="btn btn-sm btn-outline-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
                                    <span class="show"><i class="fa fa-heart-o"></i> Whish</span>
                                    <span class="hide"><i class="fa fa-heart"></i> Whislisted</span>
                                </span>
                                <span class="btn btn-sm btn-outline-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
                                    <span class="show"><i class="fa fa-eye-slash"></i> Watch</span>
                                    <span class="hide"><i class="fa fa-eye"></i> Watching</span>
                                </span>
                            </div>


                        </div>
                    </div>

                </div>

            </div>
        </section>

        <hr class="divider">

        <!-- Product details -->

        <section>
            <div class="container mt-5">

            <ul class="nav nav-tabs nav-lavalamp justify-content-center mb-4" id="productTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="true">
                        Отзывы
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="false">
                        Описание
                    </a>
                </li>
            </ul>

                <!-- Product tab content -->

                <div class="tab-content" id="productTabContent">
                    <div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">

                        <!-- Widget rating -->

                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="rating-overall">
                                    <!-- Comments -->

                                    <div class="py-3 py-lg-4">

                                        <!-- Comments header -->

                                        <header>
                                            <div class="h3 mb-1">Отзывы</div>
                                            <p class="text-muted"><small>Новые отзывы</small></p>
                                        </header>

                                        <!-- Comments feedback -->

                                        <div class="pt-3 pt-lg-4">

                                            <div id="comment-1">

                                                <div class="mb-4">
                                                    <div class="d-flex align-items-center text-small">
                                                        <img src="storage/images/main/iconSite.png" class="mr-2 rounded-circle" alt="..." style="width: 40px;">
                                                        <div><strong class="mr-1">Анна Влексеевна</strong></div>
                                                        <div class="text-muted">- 45 минут назад</div>
                                                        <div class="ml-auto">
                                                            <i class="fa fa-star icon-xs text-primary"></i>
                                                            <i class="fa fa-star icon-xs text-primary"></i>
                                                            <i class="fa fa-star icon-xs text-primary"></i>
                                                            <i class="fa fa-star icon-xs text-secondary"></i>
                                                            <i class="fa fa-star icon-xs text-secondary"></i>
                                                        </div>
                                                    </div>
                                                    <div class="my-2">
                                                        Согласна, но не очень хорошо!
                                                    </div>
                                                    <div>
                                                        <a class="link link-right link-dark"><strong>Ответить</strong></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <!-- Reply -->

                                    <div class="py-3 py-lg-4">

                                        <!-- Reply header -->

                                        <header>
                                            <div class="h3 mb-1">Оставить отзыв</div>
                                            <p class="text-muted"><small>Ваш E-Mail под защитой и будет скрыт для других пользователям.</small></p>
                                        </header>

                                        <!-- Reply form -->

                                        <div class="pt-3 pt-lg-4">
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="label" for="exampleInputEmail1">E-Mail почта</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="label" for="exampleInputName1">Видимое имя</label>
                                                            <input type="password" class="form-control" id="exampleInputName1">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="label" for="exampleComment">Комментарий</label>
                                                    <textarea class="form-control" name="" id="exampleComment" cols="20" rows="4"></textarea>
                                                </div>

                                                <div class="d-flex justify-content-between align-items-center">
                                                    <button type="submit" class="btn link link-right link-dark"><strong>Отправить</strong></button>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="description" role="tabpanel" aria-labelledby="description-tab">

                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="py-3 py-lg-4">

                                    <header>
                                        <div class="h3 mb-1">Product description</div>
                                        <p>Specfication</p>
                                    </header>

                                    <div class="py-3 py-lg-4">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus odio quam, facilisis vel placerat at, convallis at ipsum. Quisque posuere justo non imperdiet volutpat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec vehicula felis lorem, at sodales mauris convallis in. Quisque elementum augue justo, at rutrum velit eleifend sed. Mauris vitae metus erat. Duis augue purus, ornare vitae mauris eget, dictum tincidunt leo. Sed quis felis blandit, aliquam sapien eget, pulvinar dolor. Vivamus vulputate egestas justo non ullamcorper.</p>

                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus odio quam, facilisis vel placerat at, convallis at ipsum. Quisque posuere justo non imperdiet volutpat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec vehicula felis lorem, at sodales mauris convallis in. Quisque elementum augue justo, at rutrum velit eleifend sed. Mauris vitae metus erat. Duis augue purus, ornare vitae mauris eget, dictum tincidunt leo. Sed quis felis blandit, aliquam sapien eget, pulvinar dolor. Vivamus vulputate egestas justo non ullamcorper.</p>
                                        <p>Sed eget erat justo. Curabitur scelerisque sagittis molestie. Nunc sit amet porttitor odio. In blandit sem eu ante pellentesque, ornare placerat metus fringilla. Ut eu arcu finibus, aliquam libero nec, porta elit. Praesent sit amet odio a quam vehicula molestie eu ut quam. Vivamus viverra augue nulla, ac commodo sapien dictum ut. Pellentesque vehicula maximus velit vitae imperdiet.</p>
                                        <p>Praesent mattis justo sit amet dui semper tempus vel eu turpis. Donec sem nulla, porta vitae sollicitudin et, finibus vel ligula. Fusce et lorem pharetra, egestas tortor sit amet, ultricies mi. Cras ac tellus et eros maximus cursus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris ultricies leo tempor, ullamcorper magna nec, consectetur sapien. Maecenas rhoncus non eros id tristique. Aenean condimentum in quam sed rhoncus. Nunc aliquet, dolor rhoncus imperdiet faucibus, est ipsum sollicitudin massa, a placerat justo leo vel turpis. In venenatis felis vitae volutpat viverra. Donec sit amet urna tempus, convallis nunc eget, tempor neque. Nunc gravida tincidunt lectus. Mauris molestie sit amet dolor sit amet luctus. Maecenas ligula mi, tempor at dignissim ut, fermentum ut arcu.</p>
                                        <p>Curabitur non ipsum sit amet elit ultricies venenatis. Sed blandit vitae justo sit amet convallis. Aliquam tristique, odio quis vestibulum interdum, magna risus luctus augue, vitae lobortis est enim vel mauris. In eu nibh sed neque auctor efficitur. Aenean quis congue urna. Suspendisse id ultrices eros. Aliquam bibendum massa eget ex scelerisque, vitae convallis felis rutrum. Integer sed augue quam.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="shipping" role="tabpanel" aria-labelledby="shipping-tab">

                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="py-3 py-lg-4">

                                    <header>
                                        <div class="h3 mb-1">Shipping information</div>
                                        <p>Specfication</p>
                                    </header>

                                    <div class="py-3 py-lg-4">

                                        <h5>Money Back Guarantee</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus odio quam, facilisis vel placerat at, convallis at ipsum. Quisque posuere justo non imperdiet volutpat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec vehicula felis lorem, at sodales mauris convallis in. Quisque elementum augue justo, at rutrum velit eleifend sed. Mauris vitae metus erat. Duis augue purus, ornare vitae mauris eget, dictum tincidunt leo. Sed quis felis blandit, aliquam sapien eget, pulvinar dolor. Vivamus vulputate egestas justo non ullamcorper.</p>

                                        <h5>Need to Return an Item?</h5>
                                        <p>Sed eget erat justo. Curabitur scelerisque sagittis molestie. Nunc sit amet porttitor odio. In blandit sem eu ante pellentesque, ornare placerat metus fringilla. Ut eu arcu finibus, aliquam libero nec, porta elit. Praesent sit amet odio a quam vehicula molestie eu ut quam. Vivamus viverra augue nulla, ac commodo sapien dictum ut. Pellentesque vehicula maximus velit vitae imperdiet.</p>

                                        <h5>Check an open return request</h5>
                                        <p>Praesent mattis justo sit amet dui semper tempus vel eu turpis. Donec sem nulla, porta vitae sollicitudin et, finibus vel ligula. Fusce et lorem pharetra, egestas tortor sit amet, ultricies mi. Cras ac tellus et eros maximus cursus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris ultricies leo tempor, ullamcorper magna nec, consectetur sapien. Maecenas rhoncus non eros id tristique. Aenean condimentum in quam sed rhoncus. Nunc aliquet, dolor rhoncus imperdiet faucibus, est ipsum sollicitudin massa, a placerat justo leo vel turpis. In venenatis felis vitae volutpat viverra. Donec sit amet urna tempus, convallis nunc eget, tempor neque. Nunc gravida tincidunt lectus. Mauris molestie sit amet dolor sit amet luctus. Maecenas ligula mi, tempor at dignissim ut, fermentum ut arcu.</p>

                                        <h5>Send the item back</h5>
                                        <p>Curabitur non ipsum sit amet elit ultricies venenatis. Sed blandit vitae justo sit amet convallis. Aliquam tristique, odio quis vestibulum interdum, magna risus luctus augue, vitae lobortis est enim vel mauris. In eu nibh sed neque auctor efficitur. Aenean quis congue urna. Suspendisse id ultrices eros. Aliquam bibendum massa eget ex scelerisque, vitae convallis felis rutrum. Integer sed augue quam.</p>

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
<script>
export default {
    name: 'product',
    data() {
        return {
            product: []
        }
    },
    mounted() {
        this.getProduct();
    },
    methods: {
        getProduct() {
            this.axios.get('/api/products/'+this.$route.params.id).then(res => {
                this.product = res.data.data;
                console.log(res.data.data);
            })
        }
    }
}
</script>
<style>

</style>
