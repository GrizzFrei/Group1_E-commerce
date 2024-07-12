signup.php
<?= $this->extend('layouts/frontend.php') ?>

<?= $this->section('content') ?>
    <?= $this->include('layouts/inc/main-nav') ?>

    <section class="signup-section">
        <form action="#" method="post" class="signup-form">
            <h2>Create an Account</h2>

            <div class="name-fields">
                <div>
                    <label for="firstname">First Name:</label>
                    <input type="text" id="firstname" name="firstname" required>
                </div>
                
                <div>
                    <label for="surname">Surname:</label>
                    <input type="text" id="surname" name="surname" required>
                </div>
            </div>

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <div class="info-fields">
                <div>
                    <label for="age">Age:</label>
                    <input type="number" id="age" name="age" required>
                </div>
                <div>
                    <label for="gender">Gender:</label>
                    <select id="gender" name="gender" required>
                        <option value="" disabled selected>Select your gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                        <option value="prefer_not_to_say">Prefer not to say</option>
                    </select>
                </div>
                <div>
                    <label for="contact">Contact Number:</label>
                    <input type="tel" id="contact" name="contact" required>
                </div>
            </div>

            <label for="address">Address:</label>
            <div class="address-fields">
                <div>
                    <input type="text" id="street" name="street" placeholder="Street" required>
                </div>
                <div>
                    <input type="text" id="city" name="city" placeholder="City" required>
                </div>
                <div>
                    <input type="text" id="zip" name="zip" placeholder="Zip Code" required>
                </div>
            </div>
            
            <button type="submit">Sign Up</button>
        </form>
        
        <div class="signin-link">
            <p>Already have an account? <a href=<?=base_url("signup")?>>Sign In</a></p>
        </div>
    </section>

<?= $this->endSection() ?>