<?php 
    define("TITLE", "Menu Item | Franklin's Fine Dining");

    include("assets/includes/header.php");
    function strip_bad_chars($input){
        $output = preg_replace("/[^a-zA-Z0-9_]/", "", $input);
        return $output;
    }
    function calcSuggestedTip($price, $percTip){
        $tip = $price * $percTip;
        $tipText = (($percTip)*100)."% - ".(money_format("%.2n", $tip));
        return $tipText;
    }
    if(isset($_GET["item"])){
        $menu_item = strip_bad_chars($_GET["item"]);
        $dish = $food_menu_items[$menu_item];
    }
?>
<div class="container">
    <div class="dish">
        <div class="img-separator">
            <img src="assets/img/hr.png" alt="A decorative horizontal ruler">
        </div>
        <h1><?php echo $dish[title]; ?><span class="dish-price"><sup>$</sup><?php echo $dish[price]; ?></span></h1>
        <p><?php echo $dish[blurb]; ?></p>
        <p>Suggested beverage: <?php echo $dish[drink]; ?></p>
        <p>Suggested Tips:</p>
        <p><?php echo calcSuggestedTip($dish[price], 0.20); ?></p>
        <p><?php echo calcSuggestedTip($dish[price], 0.15); ?></p>
        <p><?php echo calcSuggestedTip($dish[price], 0.10); ?></p> 
        <div class="img-separator">
            <img src="assets/img/hr.png" alt="A decorative horizontal ruler">
        </div>  
        <button class="back-to-menu-btn"><a href="menu.php">Back to Menu</a></button>
    </div>
</div>


<?php
    include("assets/includes/footer.php");
?>