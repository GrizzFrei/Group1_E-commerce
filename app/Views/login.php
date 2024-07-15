login.php
<?= $this->extend('layouts/frontend.php') ?>

<?= $this->section('content') ?>
    <?= $this->include('layouts/inc/main-nav') ?>

    <div class="login-section">
        <form action=<?=base_url('loginCheck')?> class="login-form" method="post">
                    <?php if(session()->has('error')): ?>
                            <div class="alert alert-danger" role="alert">
                                <?=session('error')?>
                            </div>
                    <?php endif; ?>
            <h2>Login</h2>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            <label for="pass">Password</label>
            <input type="password" id="pass" name="pass" required>
            <button type="submit">Login</button>
            <div class="signup-link">
                <p>Don't have an account? <a href=<?=base_url("signup")?>>Sign Up</a></p>
            </div>
        </form>
    </div>

<?= $this->endSection() ?>