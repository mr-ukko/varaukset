<!DOCTYPE html>
<?php $conn = mysqli_connect('localhost','root','root','varaukset'); 
$query="SELECT varaus FROM nyt WHERE nimi='tettapaikka1'"; 
$result = mysqli_query($conn,$query); 
$row = mysqli_fetch_array($result); 
 ?>
<html>
	<link rel="stylesheet" href="styleshit.css">
	<head>
		<h1>hello world</h1>
		<div class="box-wrapper">
		<div <?php echo "id='box1'"?> style="<?php if ($row["varaus"] == 1) {echo 'background-color: blue;';} if ($row["varaus"] == 2) {echo 'background-color: red;';} ?>"> test</div>
		</div> 
		<form action="vara.php" method="get">
		<select id="cars" name="cars">
		
		<?php
		//nämä tekee sen alas veto valikon
	$query = "SELECT * FROM `nyt`";
	$result = mysqli_query($conn,$query);
        while ($row = mysqli_fetch_array($result)) {
        echo "<option value='".$row["nimi"]."' >".$row["nimi"]."</option>";}
		echo "<select><input type='submit' value='Run me now!'></input></form>"
	?>
	<?php 
	//korvaa grid item pieni teltta tällä
	$query = "SELECT * FROM `telttapaikatpieni` ORDER BY nimi ASC";
	$result = mysqli_query($conn,$query);
        while ($row = mysqli_fetch_array($result)) {
		if ($row["varaus"] == 1) 
		{$mina = "background-color: green;";} 
		if ($row["varaus"] == 2) 
		{$mina = "background-color: yellow;";}
		if ($row["varaus"] == 3) 
		{$mina = "background-color: red;";}
        echo "<div class='grid-item' style='".$mina."' ><h2>".$row."</h2></div>";}
	?>
	<?php 
	//korvaa grid item aitat tällä
	$query = "SELECT * FROM `aitta` ORDER BY nimi ASC";
	$result = mysqli_query($conn,$query);
	$rowcount = 0;

        while ($row = mysqli_fetch_array($result)) {
		if ($rowcount==2) {echo "</div><div class='grid-container'>"}
		if ($rowcount==12) {echo "</div><div class='grid-container2'>"}
		if ($row["varaus"] == 1) 
		{$mina = "background-color: green;";} 
		if ($row["varaus"] == 2) 
		{$mina = "background-color: yellow;";}
		if ($row["varaus"] == 3) 
		{$mina = "background-color: red;";}
        echo "<div class='grid-item' style='".$mina."' ><h2>".$row."</h2></div>";
		$rowcount++
		}
	?>
	<?php 
	//korvaa grid item iso teltta tällä
	$query = "SELECT * FROM `telttapaikatpieni` ORDER BY nimi ASC";
	$result = mysqli_query($conn,$query);
	$rowcount = 0;
        while ($row = mysqli_fetch_array($result)) {
		if ($rowcount==2) {echo "</div><div class='grid-container4'>"}
		if ($row["varaus"] == 1) 
		{$mina = "background-color: green;";} 
		if ($row["varaus"] == 2) 
		{$mina = "background-color: yellow;";}
		if ($row["varaus"] == 3) 
		{$mina = "background-color: red;";}
        echo "<div class='grid-item' style='".$mina."' ><h2 id = 'custombox'>".$row."</h2></div>";}
	?>
	</head>
</html>