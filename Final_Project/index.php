<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Final Project</title>
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Team</a></li>
                    <li><a href="">Menu</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
                </nav>
            <div class="hero"></div>
        </div>
    </header>
    <main>
        <div class="container">
            <section>
                <div class="img-separator"></div>
                <div class="main-info">
                    <h2>Franklin's Philosophy of fine dining</h2>
                    <p>Here at Franklin's, we know that good food isn't just about how
                        expensive the dish is. We're not pompous, we're proud. We're proud
                        our work, our quality, our environment, and our love for
                        food and family.
                    </p>
                    <p>Oh, and you can call us Frankie's. You're family here.</p>
                </div>
                <div class="img-separator"></div>
            </section>
            <section class="contact">
                <div>
                    <h3>Phone</h3>
                    <p>800.432.5542</p>
                </div>
                <div>
                    <h3>Location</h3>
                    <p>145 Aldridge St, Honololu, HI</p>
                </div>
                <div>
                    <h3>Hours</h3>
                    <div>
                        <p class="italics-text">Tuesday - Thursday</p>
                        <p>1:00pm - 9:00pm</p>
                    </div>
                    <div>
                        <p class="italics-text">Friday - Saturday</p>
                        <p>4:00pm - 11:00pm</p>
                    </div>
                    <div>
                        <p class="italics-text">Sunday - Monday</p>
                        <p>Closed</p>
                    </div>
                    <div class="red-text">
                        <p>Sorry, we're closed. Todays hours are 1:00pm until 9:00pm.</p>
                    </div>
                    
                </div>

            </section>
        </div>
    </main>
    <footer>
        <p>&copy; <?php echo date('Y'); ?> <a href="#">Franklin's Fine Dining</a></p>
        <div class="copyright-info">
            <?php 
                include("../assets/includes/copyright.php");
            ?>
        </div>
    </footer>
</body>
</html>