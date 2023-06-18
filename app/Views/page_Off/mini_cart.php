<?php
// mini_cart.php

// Example mini cart HTML
$miniCartHtml = '
    <div class="cart_item">
        <div class="cart_img">
            <a href="#"><img src="<?=ROOT?>/assets/front/imgf/product/product1.jpg" alt=""></a>
        </div>
        <div class="title">
            <a href="#">Primis In Faucibus</a>
            <p>1 x <span>$65.00</span></p>
        </div>
        <div class="cart_remove">
            <a href="#"><i class="icon-close icons"></i></a>
        </div>
    </div>
    <div class="cart_item">
        <div class="cart_img">
            <a href="#"><img src="<?=ROOT?>/assets/front/imgf/product/product2.jpg" alt=""></a>
        </div>
        <div class="cart_info">
            <a href="#">Letraset Sheets</a>
            <p>1 x <span>$60.00</span></p>
        </div>
        <div class="cart_remove">
            <a href="#"><i class="icon-close icons"></i></a>
        </div>
    </div>
    <div class="mini_cart_table">
        <div class="cart_table_border">
            <div class="cart_total">
                <span>Sub total:</span>
                <span class="price">$125.00</span>
            </div>
            <div class="cart_total mt-10">
                <span>total:</span>
                <span class="price">$125.00</span>
            </div>
        </div>
    </div>
    <div class="mini_cart_footer">
        <div class="cart_button">
            <a href="cart.html"><i class="fa fa-shopping-cart"></i> View cart</a>
        </div>
        <div class="cart_button">
            <a href="checkout.html"><i class="fa fa-sign-in"></i> Checkout</a>
        </div>
    </div>';

// Return the mini cart HTML as the response
echo $miniCartHtml;
?>
