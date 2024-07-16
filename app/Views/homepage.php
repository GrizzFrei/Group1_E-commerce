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
                <form action=<?=base_url('addToCart')?> method="post">
                    <img src=<?=base_url("assets/images/light2.jpg")?> alt="Product 1">
                    <h3>Balloon Lights</h3>
                    <p>$35.00</p>
                    <input type="hidden" name="product_id" value="30">
                    <input type="hidden" name="product_identifier" value="light">
                    <input type="hidden" name="product_price" value="35">
                    <input type="hidden" name="product_name" value="Balloon Lights">
                    <button type="submit">Add to Cart</button>
                </form>
            </div>
            <div class="product">
                <form action=<?=base_url('addToCart')?> method="post">
                    <img src=<?=base_url("assets/images/balloon4.jpg")?> alt="Product 2">
                    <h3>Space-Themed Balloons</h3>
                    <p>$20.00</p>
                    <input type="hidden" name="product_id" value="8">
                    <input type="hidden" name="product_identifier" value="balloon">
                    <input type="hidden" name="product_price" value="25">
                    <input type="hidden" name="product_name" value="Space-Themed Balloons">
                    <button type="submit">Add to Cart</button>
                </form>
            </div>
            
        </div>
    </section>

    <section class="products-section">
        <h2>Products on Sale</h2>
        <div class="products">
            <div class="product">
                <form action=<?=base_url('addToCart')?> method="post">
                    <img src=<?=base_url("assets/images/cake4.jpg")?> alt="Product 3">
                    <h3>Disco Cake</h3>
                    <p>$10.00 <span class="sale">$15.00</span></p>
                    <input type="hidden" name="product_id" value="12">
                    <input type="hidden" name="product_identifier" value="cake">
                    <input type="hidden" name="product_price" value="10">
                    <input type="hidden" name="product_name" value="Disco Cake">
                    <button type="submit">Add to Cart</button>
                </form>
            </div>
            <div class="product">
                <form action=<?=base_url('addToCart')?> method="post">
                    <img src=<?=base_url("assets/images/favors1.jpg")?> alt="Product 4">
                    <h3>Tea Loot Bag</h3>
                    <p>$18.00 <span class="sale">$25.00</span></p>
                    <input type="hidden" name="product_id" value="21">
                    <input type="hidden" name="product_identifier" value="favors">
                    <input type="hidden" name="product_price" value="18">
                    <input type="hidden" name="product_name" value="Tea Loot Bag">
                    <button type="submit">Add to Cart</button>
                </form>
            </div>
            
        </div>
    </section>

    <section class="products-section">
        <h2>New Products</h2>
        <div class="products">
            <div class="product">
                <form action=<?=base_url('addToCart')?> method="post">
                    <img src=<?=base_url("assets/images/decor4.jpg")?> alt="Product 5">
                    <h3>Thomas and Friends Decor</h3>
                    <p>$25.00</p>
                    <input type="hidden" name="product_id" value="20">
                    <input type="hidden" name="product_identifier" value="decor">
                    <input type="hidden" name="product_price" value="25">
                    <input type="hidden" name="product_name" value="Thomas and Friends Decor">
                    <button type="submit">Add to Cart</button>
                </form>
            </div>
            <div class="product">
                <form action=<?=base_url('addToCart')?> method="post">
                    <img src=<?=base_url("assets/images/costume3.jpg")?> alt="Product 6">
                    <h3>Mime Family Costume Set</h3>
                    <p>$60.00</p>
                    <input type="hidden" name="product_id" value="15">
                    <input type="hidden" name="product_identifier" value="costume">
                    <input type="hidden" name="product_price" value="60">
                    <input type="hidden" name="product_name" value="Mime Family Costume Set">
                    <button type="submit">Add to Cart</button>
                </form>
            </div>
            
        </div>
    </section>

<?= $this->endSection() ?>