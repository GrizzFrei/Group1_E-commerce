<?= $this->extend('layouts/frontend.php') ?>

<?= $this->section('content') ?>
    <?= $this->include('layouts/inc/main-nav') ?>
    <?= $this->include('layouts/inc/filter-nav') ?>
    
        <section class="products-section">
                    <?php if(session()->has('success')):?>
                        <div style="margin: auto; width: 20%;">
                            <h2><?=session('success')?></h2>
                        </div>
                    <?php endif;?>
                    <div class="products">
                        <?php $ctr = 1;?>
                    <?php foreach($products as $productData):?>
                        <?php 
                            if($ctr > 4)
                                $ctr = 1;
                        ?>
                        <!-- Product Card -->
                        <div class="product">
                            <form action=<?=base_url('addToCart')?> method="post">
                                <img src="<?=base_url('assets/images/'.$productData['product_identifier'].$ctr.'.jpg')?>" alt="Product Name" style="width:auto; height:400px;">
                                <h3><?=ucfirst($productData['product_name'])?></h3>
                                <p class="price"><?=$productData['product_price']?></p>
                                <input type="hidden" name="product_id" value=<?=$productData['product_id']?>>
                                <input type="hidden" name="product_identifier" value=<?=$productData['product_identifier']?>>
                                <input type="hidden" name="product_price" value=<?=$productData['product_price']?>>
                                <input type="hidden" name="product_name" value=<?=$productData['product_name']?>>
                                <button type="submit">Add to Cart</button>
                            </form>
                        </div>
                        <?php $ctr++;?>
                        <?php endforeach; ?>
                    </div>
        
        </section>
    

<?= $this->endSection() ?>