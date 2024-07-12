<!-- Main Navigation Bar -->
<nav class="main-nav">
        <a href="#" class="logo">Party Supplies</a>
        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">Products</a></li>
            <li><a href=<?=base_url('about')?>>About</a></li>
            <li><a href="<?= base_url('contact');?>">Contact</a></li>
        </ul>
        <a href="#" class="cart">Cart</a>
        <div class="dropdown">
            <a class="dropbtn">Account</a>
            <div class="dropdown-content">
                <a href="#">Logout</a>
                <a href="#">Edit Profile</a>
            </div>
        </div>
    </nav>