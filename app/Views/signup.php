signup.php
<?= $this->extend('layouts/frontend.php') ?>

<?= $this->section('content') ?>
    <?= $this->include('layouts/inc/main-nav') ?>

    <section class="signup-section">
        <form action=<?=base_url('registerCheck')?> method="post" class="signup-form">
            <h2>Create an Account</h2>

            <div class="name-fields">
                <div>
                    <label for="fName">First Name:</label>
                    <input type="text" id="firstname" name="fName" required>
                </div>
                
                <div>
                    <label for="lName">Surname:</label>
                    <input type="text" id="surname" name="lName" required>
                </div>
            </div>

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="pass">Password:</label>
            <input type="password" id="password" name="pass" required>

            <label for="password">Confirm Password:</label>
            <input type="password" id="password" name="confirmPass" required>
            
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
                    <label for="cNum">Contact Number:</label>
                    <input type="tel" id="contact" name="cNum" required>
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
                    <input type="text" id="zip" name="zCode" placeholder="Zip Code" required>
                </div>
            </div>
            
            <button type="submit">Sign Up</button>
        </form>
        
        <div class="signin-link">
            <p>Already have an account? <a href=<?=base_url("login")?>>Login</a></p>
        </div>
    </section>

<?= $this->endSection() ?>