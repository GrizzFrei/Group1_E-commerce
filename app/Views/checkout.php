login.php
<?= $this->extend('layouts/frontend.php') ?>

<?= $this->section('content') ?>
    <?= $this->include('layouts/inc/main-nav') ?>

    <div class="row cart-body">
        <div class="checkout-cont">
            <div class="container">
            <form>

                <div class="row">
                <div class="col-50">
                    <h3>Billing Address</h3>
                    <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                    <input type="text" id="fname" name="firstname" placeholder="Juan">
                    <label for="email"><i class="fa fa-envelope"></i> Email</label>
                    <input type="text" id="email" name="email" placeholder="juan@sample.com">
                    <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                    <input type="text" id="adr" name="address" placeholder="2nd Street">
                    <label for="city"><i class="fa fa-institution"></i> City</label>
                    <input type="text" id="city" name="city" placeholder="Quezon City">

                    <div class="row">
                    <div class="col-50">
                        <label for="state">Region</label>
                        <input type="text" id="state" name="state" placeholder="Metro Manila">
                    </div>
                    <div class="col-50">
                        <label for="zip">Zip</label>
                        <input type="text" id="zip" name="zip" placeholder="1000">
                    </div>
                    </div>
                    <input type="submit" value="Checkout" class="btn">
                </div>
    </div>

<?= $this->endSection() ?>