<!DOCTYPE html>
<?php $conn = mysqli_connect('localhost','root','root','varaukset'); 
$query="SELECT varaus FROM nyt WHERE nimi='tettapaikka1'"; 
$result = mysqli_query($conn,$query); 
$row = mysqli_fetch_array($result); 
 ?>
<html>

<head>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
</head>
<link href="StyleSheet.css" rel="stylesheet">


<title>Varaus</title>
  
<body>

<div>

<div id="position">
<h1>Varaa paikka täyttämällä lomake</h1>
<h4>Vasemmalla olevasta kuvasta näet tämän hetken vapaat, varatut ja paikat, jotka on varattu, sekä maksettu. Pelkästään varatut paikat voi vielä avautua, mutta maksetut paikat ovat lopullisesti varattu.
<br>Täytä  alla oleva lomake varausta varten.</h4>

<form id= "form">
  <label for="fname">Nimi<br>
  <input type="text" value size = 35></input></label>
  <label for="fname">Sähköposti<br>
  <input type="text" value size = 35></input></label>
  <label>Puhelinnumero<br>
  <input type="text" value size = 35></input></label>
  <label>Muuta<br>
  <input id="other" type="text" value size = 35></input></label>
  
</form>
</div>

<div class="edgebox">

	<h3 id ="guide"> <span id="green">Vihreä</span> <span id="black">=</span> Vapaa <br> <span id="yellow">Keltainen</span> 
	<span id="black">=</span> Varattu <br> <span id="red">Punainen</span> <span id="black">=</span> Varattu ja maksettu</h3>

	<div class="grid">
	<p id = "title1">AITAT</p>
		
		<div id = "box">
			<div class="grid-container6">
				<?php
				$query = "SELECT * FROM `aitta` ORDER BY nimi ASC";
				$result = mysqli_query($conn,$query);
				$rowcount = 0;
				while ($row = mysqli_fetch_array($result)) {
				if ($rowcount==2) {echo "</div><div class='grid-container'>";}
				if ($rowcount==12) {echo "</div><div class='grid-container2'>";}
				if ($row["varaus"] == 1) 
				{$mina = "background-color: #0CFF00;";} 
				if ($row["varaus"] == 2) 
				{$mina = "background-color: #F9FF31;";}
				if ($row["varaus"] == 3) 
				{$mina = "background-color: #FF3A00;";}
				$rowcount++; 
				echo "<div class='grid-item' style='".$mina."' ><h2>".$rowcount."</h2></div>";
				
				}
				?>
			</div>
		</div>
	</div>
	
	<div class="grid2">
	<p id = "title2">PIENET TELTAT</p>	
		<div id = "box">
			<div class="grid-container3">
				<?php 
				$query = "SELECT * FROM `telttapaikatpieni` ORDER BY nimi ASC";
				$result = mysqli_query($conn,$query);
				$rowcount = 7;
				while ($row = mysqli_fetch_array($result)) {
				if ($row["varaus"] == 1) 
				{$mina = "background-color: #0CFF00;";} 
				if ($row["varaus"] == 2) 
				{$mina = "background-color: #F9FF31;";}
				if ($row["varaus"] == 3) 
				{$mina = "background-color: #FF3A00;";}
				$rowcount++; 
				echo "<div class='grid-item' style='".$mina."' ><h2>".$rowcount."</h2></div>";}
				?>
			</div>
		</div>
	</div>
	
	<div class="grid3">
		<p id = "title3">ISOT TELTAT</p>
			<div id = "box">
				<div class="grid-container5">
						<?php 
						$query = "SELECT * FROM `telttapaikatiso` ORDER BY nimi ASC";
						$result = mysqli_query($conn,$query);
						$rowcount = 0;
						while ($row = mysqli_fetch_array($result)) {
						if ($rowcount==1) {echo "</div><div class='grid-container4'>";}
						if ($row["varaus"] == 1) 
						{$mina = "background-color: #0CFF00;";} 
						if ($row["varaus"] == 2) 
						{$mina = "background-color: #F9FF31;";}
						if ($row["varaus"] == 3) 
						{$mina = "background-color: #FF3A00;";}
						$rowcount++;
						echo "<div class='grid-item' style='".$mina."' ><h2 id = 'custombox'>".$rowcount."</h2></div>";}
						?>
				
			</div>
		</div>
	</div>
</div>
<form action="vara.php" method="get">
<?php
		//nämä tekee sen alas veto valikon
	$query = "SELECT * FROM `nyt`";
	$result = mysqli_query($conn,$query);
		echo "<select name='valinta'>";
        while ($row = mysqli_fetch_array($result)) {
        echo "<option value='".$row["nimi"]."'>".$row["nimi"]."</option>";}
		echo "</select><input type='submit' value='Run me now!'></input></form>"
	?>
	</div>
</body>
  
</html>