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
                        <form action=<?=base_url('addToCart')?> method="post">
                            <img src="<?=base_url('assets/images/'.$productsData['product_identifier'].$ctr.'.jpg')?>" alt="Product Name" style="width:auto; height:400px;">
                            <h3><?=$productsData['product_name']?></h3>
                            <p class="price"><?=$productsData['product_price']?></p>
                            <input type="hidden" name="product_id" value=<?=$productsData['product_id']?>>
                            <input type="hidden" name="product_identifier" value=<?=$productsData['product_identifier']?>>
                            <input type="hidden" name="product_price" value=<?=$productsData['product_price']?>>
                            <input type="hidden" name="product_name" value=<?=$productsData['product_name']?>>
                            <button type="submit">Add to Cart</button>
                        </form>
                    </div>
                    <?php $ctr++;?>
                    <?php endforeach;?>
                </div>
            
        </section>

<?= $this->endSection() ?>