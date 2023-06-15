<?php 
ob_start();
session_start();
?>
<section class="product_section mb-96">
        <div class="container">
            <div class="product_header d-flex justify-content-between  mb-50">
                <div class="section_title">
                    <h2>best selling items</h2>
                </div>
                <div class="product_tab_btn d-flex">
                    <ul class="nav" role="tablist">
                    </ul>
                    <div class="all_product">
                        <a href="shorts">Shorts</a>
                        <a>-</a>
                        <a href="productController">Home</a>
                    </div>
                </div>
            </div>            
            <div class="product_container row">                
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="all" role="tabpanel">
                        <div class="product_slick slick_slider_activation" data-slick='{
                            "slidesToShow": 4,
                            "slidesToScroll": 1,
                            "arrows": true,
                            "dots": false,
                            "autoplay": false,
                            "speed": 300,
                            "infinite": true,
                            "responsive":[
                              {"breakpoint":992, "settings": { "slidesToShow": 3 } },
                              {"breakpoint":768, "settings": { "slidesToShow": 2 } },
                              {"breakpoint":300, "settings": { "slidesToShow": 1 } }
                             ]
                        }'>
                        <?php foreach ($short as $product): ?>
                            <article class="col single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a href="product-details.html">
                                            <img class="primary_img" src="img/<?=$product->pro_pic?>"
                                                alt="consectetur">
                                        </a>
                                        <div class="product_action">
                                            <ul>
                                                <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                        data-tippy-inertia="true" data-tippy-delay="50"
                                                        data-tippy-arrow="true" data-tippy-placement="left"><i
                                                            class="icon-heart icons"></i></a></li>

                                                <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                        data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                        data-tippy-delay="50" data-tippy-arrow="true"
                                                        data-tippy-placement="left"><i
                                                            class="icon-size-fullscreen icons"></i></a></li>

                                                <li class="compare"><a data-tippy="Compare" href="#"
                                                        data-tippy-inertia="true" data-tippy-delay="50"
                                                        data-tippy-arrow="true" data-tippy-placement="left"><i
                                                            class="icon-refresh icons"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <figcaption class="product_content text-center">
                                        <div class="product_ratting">
                                            <ul class="d-flex justify-content-center">
                                                <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                <li><span>(4)</span></li>
                                            </ul>
                                        </div>
                                        <h4 class="product_name"><a href="product-details.html"><?=$product->name?></a>
                                        </h4>
                                        <div class="price_box">
                                            <span class="current_price"><?=$product->price?>$</span>
                                            <span class="old_price">$62.00</span>
                                        </div>
                                        <div class="add_to_cart">
                                            <a class="btn btn-primary" href="shorts/shortsdetails?id=<?=$product->id?>" data-tippy="Add To Cart"
                                                data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                                data-tippy-placement="top">Add To Cart</a>
                                        </div>
                                    </figcaption>
                                </figure>
                                
                            </article>
                            <?php endforeach; ?>
                        </div>
                    </div>                   
                </div>             
            </div>           
        </div>
    </section>
<?php $content=ob_get_clean();?>
<?php include_once 'page.php';?> 