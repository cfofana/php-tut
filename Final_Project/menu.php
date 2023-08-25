<?php define("TITLE", "MENU | FRANKLIN'S FINE DINING"); ?>
<?php include("assets/includes/header.php") ?>


<div class="menu-items">
    <h1>Our Delicious Menu</h1>
    <p>Like our team, our menu is very small &mdash; but dang, 
        does it pack a punch.
    </p>
    <p><em>Click any menu item to learn more about it.</em></p>
    <div class="img-separator">
        <img src="assets/img/hr.png" alt="A decorative horizontal ruler">
    </div>

    <ul>
        <?php 
            foreach($food_menu_items as $dish => $item){
         ?>
            <li><a href="dish.php?item=<?php echo $dish; ?>"><?php echo $item[title]; ?></a><sup>  $</sup><?php echo $item[price]; ?></li>

        <?php     
        }
        ?>
    </ul>
</div>

<?php include("assets/includes/footer.php") ?>
