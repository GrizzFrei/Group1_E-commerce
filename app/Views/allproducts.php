<?php $productList = array(
            'accessory', 'balloon', 'cake', 'costume', 'decor', 'favors', 'invitation', 'light', 'tableware'
)?>

<?= $this->extend('layouts/frontend.php') ?>

<?= $this->section('content') ?>
    <?= $this->include('layouts/inc/main-nav') ?>

    <?php for ($i = 0; $i < 9; $i++):?>
        <section class="products-section">
        <h2><?=ucfirst($productList[$i])?></h2>
                <div class="products">
                    <?php for ($j = 1; $j <= 4; $j++):?>
                    <!-- Product Card -->
                    <div class="product">
                        <img src="<?=base_url('assets/images/'.$productList[$i].$j.'.jpg')?>" alt="Product Name">
                        <h3><?=ucfirst($productList[$i]).' '.$j?></h3>
                        <p class="price">$29.99</p>
                        <button>Add to Cart</button>
                    </div>
                    <?php endfor;?>
                </div>
            
        </section>
    <?php endfor;?>

<?= $this->endSection() ?>