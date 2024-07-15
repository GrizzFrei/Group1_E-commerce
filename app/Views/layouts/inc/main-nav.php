<!-- Main Navigation Bar -->
<nav class="main-nav">
        <a href=<?=base_url('/')?> class="logo">Party Supplies</a>
        <ul class="nav-links">
            <li><a href=<?=base_url('/')?>>Home</a></li>
            <li><a href=<?=base_url('allProducts')?>>Products</a></li>
            <li><a href=<?=base_url('about')?>>About</a></li>
            <li><a href="<?= base_url('contact');?>">Contact</a></li>
        </ul>
        <?php if(session()->has('id')):?>
            <a href=<?=base_url('cart')?> class="cart1">Cart</a>
            <?php else:?>
                <a href=<?=base_url('login')?> class="cart1">Cart</a> 
        <?php endif;?>
        <div class="dropdown">
            <?php if(!session()->has('id')):?>
                <a href=<?=base_url('login')?> class="dropbtn">Account</a>
                
                <?php else:?>
                    <a href="#" class="dropbtn">Welcome, <?=session()->get('username')?></a>
                    <div class="dropdown-content">
                    <a href=<?=base_url('logout')?>>Logout</a>
                    </div>
                
            <?php endif;?>
            
            
        </div>
    </nav>