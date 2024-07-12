<?= $this->extend('layouts/frontend.php') ?>

<?= $this->section('content') ?>
    <?= $this->include('layouts/inc/main-nav') ?>

    <!-- Contact Section -->
    <section class="contact-section">
        <h2>Contact Us</h2>
        <p>If you have any queries, please feel free to reach out to us. We'd love to hear from you!</p>
        
        <form action="#" method="post" class="contact-form">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" required>
            
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea>
            
            <button type="submit">Send Message</button>
        </form>
        
        <div class="contact-info">
            <h3>Contact Information</h3>
            <p><strong>Mobile Phone:</strong> +123 456 7890</p>
            <p><strong>Telephone:</strong> +123 456 7890</p>
            <p><strong>Email:</strong> contact@eshop.com</p>
        </div>
    </section>

<?= $this->endSection() ?>