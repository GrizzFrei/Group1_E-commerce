login.php
<?= $this->extend('layouts/frontend.php') ?>

<?= $this->section('content') ?>
    <?= $this->include('layouts/inc/main-nav') ?>

    <div class="cart-body">
        <div class="cart">
            <h1>Shopping Cart</h1>
            <?php $total = 0;?>
            <?php foreach($cartProducts as $products):?>
                <div class="cart-item">
                    <?php 
                        $tempId = fmod($products['product_id'], 4);
                        $picId = $tempId == 0 ? $tempId+4 : $tempId;
                        $total += $products['product_price'];
                    ?>
                    <img src=<?=base_url('assets/images/'.$products['product_identifier'].$picId.'.jpg')?> alt="Item 1">
                    <div class="item-details">
                        <h2><?=$products['product_name']?></h2>
                        <p><?='$'.$products['product_price']?></p>
                        <a class="remove-btn" href=<?=base_url('delete/'.$products['cart_id'])?>>Remove</a>
                    </div>
                </div>
            <?php endforeach;?>
            <div class="total">
                <h2>Total: $<?=$total?></h2>
                <a href=<?=base_url("checkout")?> class="checkout-btn">Checkout</a>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>