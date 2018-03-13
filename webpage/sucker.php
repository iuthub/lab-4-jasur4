<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
		<?php
		if(isset($_REQUEST["name"])&&isset($_REQUEST["section"])&&isset($_REQUEST["Creditnumber"])&&isset($_REQUEST["CreditCard"])&&($_REQUEST["name"]!="")&&($_REQUEST["Creditnumber"]!=""))
		{
		?>
		<h1>Thanks, sucker</h1>
		
		<?php
		$name = $_REQUEST["name"];
		$section = $_REQUEST["section"];
		$Creditnumber = $_REQUEST["Creditnumber"];
		$CreditCard = $_REQUEST["CreditCard"];
		?>
		<p>Your information has been recorded.</p>

		<dl>
			<dt>Name</dt>
			<dd><?= $name ?></dd>

			<dt>Section</dt>
			<dd><?= $section ?></dd>

			<dt>Credit Card</dt>
			<dd><?= $Creditnumber ?>(<?= $CreditCard ?>)</dd>
		</dl>
		<?php
		$file = fopen("sucker.txt", "a");
		fwrite($file, $name.";");
		fwrite($file, $section.";");
		fwrite($file, $Creditnumber.";");
		fwrite($file, $CreditCard.";");
		fwrite($file,PHP_EOL);
		fclose($file);
		?>
		<?php
		foreach (file("sucker.txt") as $line) {
		?>
		<pre><?= $line?></pre>
		<?php }
		}
		else
			{ 
		?>
	<h1>Sorry!</h1>
	<p>You didn't fill out the form completly!<a href="buyagrade.html"> try again?</a></p>
	<?php
	
	}
		 ?>
	
	</body>
</html>