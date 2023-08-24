<?php 
    include("assets/includes/arrays.php"); 
    $company_name = "Franklin's Fine Dining";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE; ?></title>
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="hero">
                <a href="index.php">
                    <img src="assets/img/banner.png" alt="Hero image to return to homepage">
                </a>
            </div>
            <nav class="main-nav">
                <?php include("assets/includes/nav.php"); ?>
            </nav>
        </div>
    </header>