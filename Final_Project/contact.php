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

<?php 
    if(isset($_POST["contact_submit"])){
        $name = trim($_POST["name"]);
        $email = trim($_POST["email"]);
        $msg = $_POST["message"];

        function has_header_injection($str){
           return preg_match("/[\r\n]/", $str); 
        }

        if(has_header_injection($name) || has_header_injection($email)){
            die();
        }
        if(!$name || !$email || !$msg){
            echo "<h4 class='error-msg'>All fields required.</h4><a href='contact.php' class='btn-go-back'>Go back and try again.</a>";
            exit;
        }
        // Add the recipient email
        $to = "ceesayfofana@hotmail.co.uk";
        $subject = "$name sent you a message";
        $message = "Name: $name\r\n";
        $message .= "Email: $email\r\n";
        $message .= "Message:\r\n$msg";

        if(isset($_POST["subscribe"]) && $_POST["subscribe"] == "Subscribe"){
            // Add a new line to message variable
            $message .= "\r\n\r\n\r\nPlease add $email to your mailing list.";
        }
        $message = wordwrap(72);
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
        $headers .= "From: $name <$email>\r\n";
        $headers .= "X-Priority: 1\r\n";
        $headers .= "X-MSMail-Priority: High\r\n\r\n";

        // Send the email
         mail($to, $subject, $message, $headers);
?>
        <h5>Thanks for contacting Franklin's.</h5>
        <p>Please allow 24 hours for a response.</p>
        <p><a href="index.php" class="btn-homepage">&laquo; Go Back to Home page</a></p>
<?php
    } else {
?>
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
<?php } ?>
        <div class="img-separator">
            <img src="assets/img/hr.png" alt="A decorative horizontal ruler">
        </div>
    </div>
</div>


<?php
    include("assets/includes/footer.php");
?>
