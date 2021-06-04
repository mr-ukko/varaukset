<!DOCTYPE html>
<html>
	<link rel="stylesheet" href="styleshit.css">
	<head>
		<h1>hello world</h1>
		<div class="box-wrapper">
		<div id="box1" style="<?php $conn = mysqli_connect('localhost','root','root','varaukset'); $query="SELECT varaus FROM nyt WHERE nimi='tettapaikka1'"; $result = mysqli_query($conn,$query); if ($result==1) {echo 'background-color: coral;';} if ($result==2) {echo 'background-color: red;';} ?>"> <?php $conn = mysqli_connect('localhost','root','root','varaukset'); $query="SELECT varaus FROM nyt WHERE nimi='tettapaikka1'"; $result = mysqli_query($conn,$query); echo "" + $result; ?> test</div>
		</div> 
		<form action="vara.php/?@=tettapaikka1" method="get">
        <input type="submit" value="Run me now!"></input>
    </form>
	</head>
</html>