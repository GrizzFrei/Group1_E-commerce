login.php
<?= $this->extend('layouts/frontend.php') ?>

<?= $this->section('content') ?>
    <?= $this->include('layouts/inc/main-nav') ?>

    <div class="login-section">
        <form class="login-form">
            <h2>Login</h2>
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Login</button>
            <div class="signup-link">
                <p>Don't have an account? <a href=<?=base_url("signup")?>>Sign Up</a></p>
            </div>
        </form>
    </div>

<?= $this->endSection() ?>