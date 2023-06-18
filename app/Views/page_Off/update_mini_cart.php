<?php
// Fetch the wishlist items and calculate the total
// Modify this code based on how you store and retrieve wishlist data

$total = 0; // Replace with the actual total

ob_start(); // Start output buffering
?>

<div class="mini_cart">
  <div class="cart_gallery">
    <!-- Loop through wishlist items and generate the cart item HTML -->
    <?php foreach ($wishlistItems as $item): ?>
    <div class="cart_item">
      <div class="cart_img">
        <a href="#"><img src="<?= ROOT ?>/assets/front/imgf/product/product1.jpg" alt=""></a>
      </div>
      <div class="title">
        <a href="#"><?= $item ?></a>
        <p>1 x <span> $65.00 </span></p>
      </div>
      <div class="cart_remove">
        <a href="#"><i class="icon-close icons"></i></a>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
  <div class="mini_cart_table">
    <div class="cart_table_border">
      <div class="cart_total">
        <span>Sub total:</span>
        <span class="price">$<?= $total ?></span>
      </div>
      <div class="cart_total mt-10">
        <span>Total:</span>
        <span class="price">$<?= $total ?></span>
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
  </div>
</div>

<?php
// Get the generated HTML from the output buffer and clean the buffer
$html = ob_get_clean();

// Send the HTML response
echo $html;
?>
