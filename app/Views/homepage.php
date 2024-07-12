<?= $this->extend('layouts/frontend.php') ?>

<?= $this->section('content') ?>
    <?= $this->include('layouts/inc/main-nav') ?>

    <!-- Landing Page -->
    <section class="landing-page" style="background-image: url('img/landingBG.jpg');background-repeat: no-repeat, repeat;background-size: cover;">
        <h1>Welcome to Party Supplies</h1>
        <p>Your one-stop shop for all of your party needs.</p>
    </section>

    <?= $this->include('layouts/inc/filter-nav') ?>

    <!-- Products Sections -->
    <section class="products-section">
        <h2>Hot Products</h2>
        <div class="products">
            <div class="product">
                <img src=<?=base_url("assets/images/light2.jpg")?> alt="Product 1">
                <h3>Party Lights</h3>
                <p>$10.00</p>
                <button>Add to Cart</button>
            </div>
            <div class="product">
                <img src=<?=base_url("assets/images/balloon5.jpg")?> alt="Product 2">
                <h3>Forest Balloon</h3>
                <p>$20.00</p>
                <button>Add to Cart</button>
            </div>
            
        </div>
    </section>

    <section class="products-section">
        <h2>Products on Sale</h2>
        <div class="products">
            <div class="product">
                <img src=<?=base_url("assets/images/cake4.jpg")?> alt="Product 3">
                <h3>Disco Cake</h3>
                <p>$10.00 <span class="sale">$15.00</span></p>
                <button>Add to Cart</button>
            </div>
            <div class="product">
                <img src=<?=base_url("assets/images/favors1.jpg")?> alt="Product 4">
                <h3>Tea Loot Bags</h3>
                <p>$18.00 <span class="sale">$25.00</span></p>
                <button>Add to Cart</button>
            </div>
            
        </div>
    </section>

    <section class="products-section">
        <h2>New Products</h2>
        <div class="products">
            <div class="product">
                <img src=<?=base_url("assets/images/decor4.jpg")?> alt="Product 5">
                <h3>Thomas & Friends Theme</h3>
                <p>$30.00</p>
                <button>Add to Cart</button>
            </div>
            <div class="product">
                <img src=<?=base_url("assets/images/costume3.jpg")?> alt="Product 6">
                <h3>Family Mime Costume Set</h3>
                <p>$40.00</p>
                <button>Add to Cart</button>
            </div>
            
        </div>
    </section>

<?= $this->endSection() ?>