<?= $this->extend('layouts/frontend.php') ?>

<?= $this->section('content') ?>
    <?= $this->include('layouts/inc/main-nav') ?>

    
    <section class="about-section">
        <h2>About Our Party Supply Store</h2>
        <p>
            Welcome to Party Supplies, your one-stop destination for all your party supply needs! We offer a wide variety of party decorations, balloons, tableware, costumes, and more to make your celebrations unforgettable. Our mission is to provide high-quality, affordable products that add joy and excitement to your special occasions.
        </p>
        <p>
            This is a final project e-commerce website.
        </p>
    </section>

    
    <section class="team-section">
        <h2>Meet Our Development Team</h2>
        <div class="team">
            <div class="team-member">
                <img src="img/profile1.jpg" alt="Team Member 1">
                <h3>Jomil Mutya</h3>
                <p>Lead Developer</p>
            </div>
            <div class="team-member">
                <img src="img/profile3.jpg" alt="Team Member 2">
                <h3>Jayvee Tan</h3>
                <p>Backend Developer</p>
            </div>
            <div class="team-member">
                <img src="img/profile5.jpg" alt="Team Member 3">
                <h3>Vhinz Henry Saguinsin</h3>
                <p>Frontend Developer</p>
            </div>
            <div class="team-member">
                <img src="img/profile2.jpg" alt="Team Member 4">
                <h3>Arcy Gabriel</h3>
                <p>UI/UX Designer</p>
            </div>
            <div class="team-member">
                <img src="img/profile4.jpg" alt="Team Member 5">
                <h3>Mariter Nepomuceno</h3>
                <p>QA Engineer</p>
            </div>
        </div>
    </section>

<?= $this->endSection() ?>