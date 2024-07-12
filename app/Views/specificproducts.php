<?= $this->extend('layouts/frontend.php') ?>

<?= $this->section('content') ?>
    <?= $this->include('layouts/inc/main-nav') ?>
    <?= $this->include('layouts/inc/filter-nav') ?>
    
        <section class="products-section">
        <h2><?=ucfirst($product[0]['category'])?></h2>
                <div class="products">
                <?php for ($j = 1; $j <= 4; $j++):?>
                    <!-- Product Card -->
                    <div class="product">
                        <img src="<?=base_url('assets/images/'.$product[0]['category'].$j.'.jpg')?>" alt="Product Name">
                        <h3><?=ucfirst($product[0]['category']).' '.$j?></h3>
                        <p class="price">$29.99</p>
                        <button>Add to Cart</button>
                    </div>
                <?php endfor;?>
                </div>
            
        </section>
    

<?= $this->endSection() ?>