<?php $productList = array(
            'accessory', 'balloon', 'cake', 'costume', 'decor', 'favors', 'invitation', 'light', 'tableware'
)?>

<?= $this->extend('layouts/frontend.php') ?>

<?= $this->section('content') ?>
    <?= $this->include('layouts/inc/main-nav') ?>

        <section class="products-section">
                <div class="products">
                    <?php $ctr = 1;?>
                    <?php foreach($products as $productsData):?>
                        <?php 
                            if($ctr > 4)
                                $ctr = 1;
                        ?>
                    <!-- Product Card -->
                     
                    <div class="product">
                        <img src="<?=base_url('assets/images/'.$productsData['product_identifier'].$ctr.'.jpg')?>" alt="Product Name">
                        <h3><?=$productsData['product_name']?></h3>
                        <p class="price"><?=$productsData['product_price']?></p>
                        <button>Add to Cart</button>
                    </div>
                    <?php $ctr++;?>
                    <?php endforeach;?>
                </div>
            
        </section>

<?= $this->endSection() ?>