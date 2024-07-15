<?= $this->extend('layouts/frontend.php') ?>

<?= $this->section('content') ?>
    <?= $this->include('layouts/inc/main-nav') ?>
    <?= $this->include('layouts/inc/filter-nav') ?>
    
        <section class="products-section">
        
                    <div class="products">
                        <?php $ctr = 1;?>
                    <?php foreach($products as $productData):?>
                        <?php 
                            if($ctr > 4)
                                $ctr = 1;
                        ?>
                        <!-- Product Card -->
                        <div class="product">
                            <img src="<?=base_url('assets/images/'.$productData['product_identifier'].$ctr.'.jpg')?>" alt="Product Name">
                            <h3><?=ucfirst($productData['product_name'])?></h3>
                            <p class="price"><?=$productData['product_price']?></p>
                            <button>Add to Cart</button>
                        </div>
                        <?php $ctr++;?>
                        <?php endforeach; ?>
                    </div>
        
        </section>
    

<?= $this->endSection() ?>