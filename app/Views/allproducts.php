<?= $this->extend('layouts/frontend.php') ?>

<?= $this->section('content') ?>
    <?= $this->include('layouts/inc/main-nav') ?>

    <section class="products-section">
        <div class="products" id="product-list">
            <!-- Product Card -->
            <div class="product decorations">
                <img src="path/to/product-image.jpg" alt="Product Name">
                <h3>Product Name</h3>
                <p class="price">$29.99</p>
                <button>Add to Cart</button>
            </div>
            <!-- Add more product cards using PHP loop -->
        </div>
    </section>

    <script>
        function filterProducts(category) {
            var products = document.getElementsByClassName('product');
            for (var i = 0; i < products.length; i++) {
                if (category === 'all') {
                    products[i].style.display = 'block';
                } else {
                    if (products[i].classList.contains(category)) {
                        products[i].style.display = 'block';
                    } else {
                        products[i].style.display = 'none';
                    }
                }
            }
        }
    </script>

<?= $this->endSection() ?>