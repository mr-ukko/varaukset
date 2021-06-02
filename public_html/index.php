
<?php
session_start();
$_SESSION["favcolor"] = "green";
?>
<html>
	<link rel="stylesheet" href="styleshit.css">
	<head>
		</h1>hello world</h1>
		<div class="box-wrapper">
		<div id="box1" onclick="<?php $_SESSION["favcolor"] = "gree"; ?> "> test</div>
		</div> 
		< <form action="vara.php" method="get">
        <input type="submit" value="Run me now!">
    </form>
	</head>
</html>