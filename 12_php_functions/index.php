<?php
	
	// Constants
	define("TITLE", "PHP Functions");
	
	// Custom Variables
	$name	= "Ceesay";
	$lesson_num	= 12;
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo TITLE; ?></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial <?php echo $lesson_num; ?>: <small><?php echo TITLE; ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				
				<h3>Using <code>sort()</code></h3>
				<?php
					
					$dinner = ["Meat", "Potato", "Beans", "Rice"];
                    $i = 1;
                    echo "Before sorting: <br/>";
                    foreach($dinner as $value){
                        echo "$i: $value <br />";
                        $i++;
                    }
                    $i = 1;
                    sort($dinner);
                    $j = 1;
                    echo "After sorting: <br/>";
                    foreach($dinner as $value){
                        echo "$j: $value <br/>";
                        $j++;
                    }
                    $j = 1;
					
				?>
				
				<h3>Using <code>rsort()</code></h3>
				<?php
					echo "Before rsorting: <br/>";
                    foreach($dinner as $value){
                        echo "$i: $value <br/>";
                        $i++;
                    } 
                    rsort($dinner);
                    echo "After rsorting: <br/>";
                    foreach($dinner as $value){
                        echo "$j: $value <br/>";
                        $j++;
                    }
					
				?>
				
				<h3>Using <code>strtolower()</code></h3>
				<?php
                    $txt = "TWINKLE TWINKLE LITTLE STAR";
					foreach($dinner as $value){
                        echo strtolower($value)."<br/>";
                    }
                    echo strtolower($txt);
					
				?>
				
				<h3>Using <code>sha1()</code></h3>
				<?php
					
					$password = "MyPassword";
                    echo "Before: $password<br/>";
                    $password = sha1($password);
                    echo "After: $password";
					
				?>

                <h3>Using custom functions </h3>
                <?php 
                function hangTen($location){
                    echo "We are surfing in $location <br/>";
                }
                hangTen("Hawaii");
                hangTen("California");
                hangTen("Malibu");
				?>
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;      <?php echo date('Y'); ?> - <?php echo $name; ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
