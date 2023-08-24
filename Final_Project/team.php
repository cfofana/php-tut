<?php define("TITLE", "Team | Franklin's Fine Dining"); ?>
<?php include("assets/includes/header.php"); ?>

<div class="container">
    <div class="team">
        <h1>Our Team at Franklin's</h1>
        <p>We're small, but mighty. Franklin's Fine Dining has been a family-owned 
            and run business since the dirty thirties, and we're proud of it! When you 
            get these three together, you never know what can happen. But you can
            count on one thing: <em>The best food you've ever had. Ever.</em>
        </p>
        <div class="img-separator">
            <img src="assets/img/hr.png" alt="A decorative horizontal ruler">
        </div>
        <div class="team-members">
            <?php foreach($employees as $employee){
            ?> 
            <div class="team-member clearfix">
                <img class ="img" src="assets/img/<?php echo $employee[img]; ?>.png" alt="<?php echo $employee[name]; ?>'s picture" />
                <h2 class ="name"><?php echo $employee[name]; ?></h2>
                <h3 class ="position"><?php echo $employee[position]; ?></h3>
                <p class ="bio"><?php echo $employee[bio]; ?></p>
            </div>
            <?php } ?>
        </div>
    </div>
</div>



<?php include("assets/includes/footer.php"); ?>