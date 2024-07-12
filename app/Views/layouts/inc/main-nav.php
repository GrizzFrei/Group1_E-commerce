<!-- Main Navigation Bar -->
<nav class="main-nav">
        <a href=<?=base_url('/')?> class="logo">Party Supplies</a>
        <ul class="nav-links">
            <li><a href=<?=base_url('/')?>>Home</a></li>
            <li><a href=<?=base_url('allProducts')?>>Products</a></li>
            <li><a href=<?=base_url('about')?>>About</a></li>
            <li><a href="<?= base_url('contact');?>">Contact</a></li>
        </ul>
        <a href=<?=base_url('cart')?> class="cart1">Cart</a>
        <div class="dropdown">
            <a href=<?=base_url('login')?> class="dropbtn">Account</a>
            <div class="dropdown-content">
                <a href="#">Logout</a>
                <a href="#">Edit Profile</a>
            </div>
        </div>
    </nav>