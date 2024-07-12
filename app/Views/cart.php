login.php
<?= $this->extend('layouts/frontend.php') ?>

<?= $this->section('content') ?>
    <?= $this->include('layouts/inc/main-nav') ?>

    <div class="cart-body">
        <div class="cart">
            <h1>Shopping Cart</h1>
            <div class="cart-item">
                <img src=<?=base_url("assets/images/light2.jpg")?> alt="Item 1">
                <div class="item-details">
                    <h2>Light 2</h2>
                    <p>$10.00</p>
                    <button class="remove-btn">Remove</button>
                </div>
            </div>
            <div class="cart-item">
                <img src=<?=base_url("assets/images/balloon5.jpg")?> alt="Item 2">
                <div class="item-details">
                    <h2>Balloon 5</h2>
                    <p>$20.00</p>
                    <button class="remove-btn">Remove</button>
                </div>
            </div>
            <div class="total">
                <h2>Total: $30.00</h2>
                <a href=<?=base_url("checkout")?> class="checkout-btn">Checkout</a>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>