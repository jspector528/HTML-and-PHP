<!doctype html>
<html Lang="en">
<html>
	<head>
		<!--Name: Jared Spector
		Filename: software_order.html
		Class Section: CTI.110.0071
		-->
		<meta charset="utf-8" />
		<link rel="stylesheet" type="css" href="Lab13.css">
		<title>Software Order</title>
	</head>
	<body>
	<h1>Software Order</h1>
	<?php	    
		if (isset($_POST['adult']) && isset($_POST['child']))
		{	
		$adult = $_POST['adult'];
		$child = $_POST['child'];
		$numTix = $adult + $child
		
		if ($numTix >= 5){
			$fee = 0.5
			}
			else($numTix<5){
			$fee = 1.0
			}
			
		$subtotal =($adult * 35) + ($child * 35);
		$tax = $subtotal * .07;
		$totalCost = $subtotal + $fee + $tax;
		echo("<p>Adult Tickets: " . number_format($adult, 2, ".",",") . "</p>");
		echo("<p>Child Tickets: " . number_format($child, 2, ".",",") . "</p>");
		echo("<p>Subtotal: $" . number_format($subtotal, 2, ".",",") . "</p>");
		echo("<p>Transaction Fee: $" . number_format($fee, 2, ".",",") . "</p>");
		echo("<p>Sales Tax $" . number_format($tax, 2, ".",",") . "</p>");
		echo("<h2> Your total is: $" . number_format($totalCost, 2, ".",",") . "</h2>");
		
		}
		?>
		<br>
		<a href="software_order.html">Return to main page</a>
		</body>
</html>
