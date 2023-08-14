<?php

	// Constants
	define("TITLE", "Arrays Practice");


	// Variables
	$name = "Ceesay";

	
	// Arrays
	$age_group = ["child", "teenager", "adult"];
	$handlebar = array(
		name => "Handlebar",
		color => "Black",
	);
	$fu_manchu = array(
		name => "Fu Manchu",
		color => "Brown",
	);
	$salvador_dali = array(
		name => "Salvador Dali",
		color => "Blonde",
	);
	$gentlemen = [
		array(
			first_name => "Carter",
			country => 'Canada'
		),
		array(
			first_name => "Rodrigo",
			country => "Uruguay"
		),
		array(
			first_name => "Giovani",
			country => "Italy"
		)
	];
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Get Your Hands Dirty: <?php echo TITLE; ?></title>
		<link href="/assets/styles.css" rel="stylesheet">
		<script type="text/javascript" src="/assets/syntaxhighlighter/scripts/shCore.js"></script>
		<script type="text/javascript" src="/assets/syntaxhighlighter/scripts/shBrushPhp.js"></script>
		<link type="text/css" rel="stylesheet" href="/assets/syntaxhighlighter/styles/shCoreDefault.css"/>
		<script type="text/javascript">SyntaxHighlighter.all();</script>
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="/assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Get Your Hands Dirty: <small><?php echo TITLE; 	?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				
				<h3><?php echo $gentlemen[0][first_name]; ?> from <?php echo $gentlemen[0][country]; ?></h3>
				<p><?php echo $gentlemen[0][first_name]; ?> is quite the <?php echo $age_group[2] ?>. He sports a solid <?php echo $handlebar[name]; ?> moustache that is <?php echo $handlebar[color]; ?> in color.</p>
				
				<h3><?php echo $gentlemen[1][first_name]; ?> from <?php echo $gentlemen[1][country]; ?></h3>
				<p><?php echo $gentlemen[1][first_name]; ?> is rather a dapper <?php echo $age_group[1] ?>. He proudly wears a <?php echo $fu_manchu[name]; ?> moustache that is colored a gentle <?php echo $fu_manchu[color]; ?> color.</p>
				
				<h3><?php echo $gentlemen[2][first_name]; ?> from <?php echo $gentlemen[2][country]; ?></h3>
				<p><?php echo $gentlemen[2][first_name]; ?> might seem too young for a moustache because he is a  <?php echo $age_group[0] ?>. But he proudly displays his <?php echo $salvador_dali[name]; ?> moustache at school. Although it's a little hard to see because it is light <?php echo $salvador_dali[color]; ?>.</p>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the final example</a>
			
			<div class="navs cf">
				<a href="" class="button prev">Previous Lecture</a>
				<a href="" class="button next">Next Lecture</a>
			</div><!-- end navs -->
			
			<hr>
			
			<small>&copy;<?php echo date("F j, Y"); ?> - <?php echo $name ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
