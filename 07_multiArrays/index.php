<?php
	
	// Constants
	define('TITLE', 'Multidimensional Arrays');
	
	// Custom Variables
	$name = 'Ceesay';
	$lesson_num = 8;
	
	// Moustache Multi-Dimensional Array
	$moustache = [
		array(
			name => 'Handlebar',
			creep_factor => 'High',
			av_growth_days => 14
		),
		array(
			name => 'Salvador Dali',
			creep_factor => 'Extreme',
			av_growth_days => 62
		),
		array(
			name => 'Fu Manchu',
			creep_factor => 'Very High',
			av_growth_days => 58
		)
	];


?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo TITLE; ?></title>
		<link href="/assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="/assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial <?php echo $lesson_num; ?>: <small><?php echo TITLE; ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				<h2>The <?php echo $moustache[0][name] ?> Moustache!</h2>
				<p>This moustache is quite the dirt squirrel! It boasts a creep factor of <strong><?php echo $moustache[0][creep_factor] ?></strong> and takes <strong><?php echo $moustache[0][av_growth_days] ?> days</strong> to grow on average.</strong></p>
				
				<h2>The <?php echo $moustache[1][name] ?> Moustache!</h2>
				<p>This moustache is quite the dirt squirrel! It boasts a creep factor of <strong><?php echo $moustache[1][creep_factor] ?></strong> and takes <strong><?php echo $moustache[1][av_growth_days] ?> days</strong> to grow on average.</strong></p>

				<h2>The <?php echo $moustache[2][name] ?> Moustache!</h2>
				<p>This moustache is quite the dirt squirrel! It boasts a creep factor of <strong><?php echo $moustache[2][creep_factor] ?></strong> and takes <strong><?php echo $moustache[2][av_growth_days] ?> days</strong> to grow on average.</strong></p>
				<!-- REPEAT ABOVE 2X -->
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;  <?php echo date("F j, Y"); ?> - <?php echo $name; ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
