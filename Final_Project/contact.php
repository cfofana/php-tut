<?php 
    define("TITLE", "Contact | Franklin's Fine Dining");
    include("assets/includes/header.php");
?>
<div class="container">
    <div class="contact-form">
        <div class="img-separator">
            <img src="assets/img/hr.png" alt="A decorative horizontal ruler">
        </div>
        <h1>Get in touch with you</h1>
        <form method="post" action="">
            <label for="name">Your Name</label><br>
            <input type="text" name="name" id="name"><br>

            <label for="email">Your Email</label><br>
            <input type="email" name="email" id="email"><br>

            <label for="message">And Your Message</label><br>
            <textarea name="message" id="message" cols="30" rows="10"></textarea><br>

            <input type="checkbox" name="subscribe" id="subscribe" value="Subscribe">
            <label for="subscribe">Subscribe to Newsletter</label><br>

            <input type="submit" class="btn-submit" name="contact_submit" value="Send Message">        
        </form>

        <div class="img-separator">
            <img src="assets/img/hr.png" alt="A decorative horizontal ruler">
        </div>
    </div>
</div>


<?php
    include("assets/includes/footer.php");
?>
