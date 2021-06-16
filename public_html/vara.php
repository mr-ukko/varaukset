<?php
echo $_GET["value"]; 
	$conn = mysqli_connect('localhost','root','root','varaukset'); 
	switch ( $_GET["value"]) 
		{
		case "aitta1":
		$query="SELECT varaus FROM aitta WHERE nimi='aitta01'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		if ($row["varaus"]==1) {$query ="UPDATE aitta SET varaus = '2' WHERE nimi = aitta01;";}
		if ($row["varaus"]==2) {$query ="UPDATE aitta SET varaus = '3' WHERE nimi = aitta01;";}
		if ($row["varaus"]==3) {$query ="UPDATE aitta SET varaus = '1' WHERE nimi = aitta01;";}
			break;
		case "aitta2":
		$query="SELECT varaus FROM aitta WHERE nimi='aitta02'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		if ($row["varaus"]==1) {$query ="UPDATE aitta SET varaus = '2' WHERE nimi = aitta02;";}
		if ($row["varaus"]==2) {$query ="UPDATE aitta SET varaus = '3' WHERE nimi = aitta02;";}
		if ($row["varaus"]==3) {$query ="UPDATE aitta SET varaus = '1' WHERE nimi = aitta02;";}
			break;
		case "aitta3":
		$query="SELECT varaus FROM aitta WHERE nimi='aitta03'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		if ($row["varaus"]==1) {$query ="UPDATE aitta SET varaus = '2' WHERE nimi = aitta03;";}
		if ($row["varaus"]==2) {$query ="UPDATE aitta SET varaus = '3' WHERE nimi = aitta03;";}
		if ($row["varaus"]==3) {$query ="UPDATE aitta SET varaus = '1' WHERE nimi = aitta03;";}
			break;
		case "aitta4":
		$query="SELECT varaus FROM aitta WHERE nimi='aitta04'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		if ($row["varaus"]==1) {$query ="UPDATE aitta SET varaus = '2' WHERE nimi = aitta04;";}
		if ($row["varaus"]==2) {$query ="UPDATE aitta SET varaus = '3' WHERE nimi = aitta04;";}
		if ($row["varaus"]==3) {$query ="UPDATE aitta SET varaus = '1' WHERE nimi = aitta04;";}
			break;
		case "aitta5":
		$query="SELECT varaus FROM aitta WHERE nimi='aitta05'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		if ($row["varaus"]==1) {$query ="UPDATE aitta SET varaus = '2' WHERE nimi = aitta05;";}
		if ($row["varaus"]==2) {$query ="UPDATE aitta SET varaus = '3' WHERE nimi = aitta05;";}
		if ($row["varaus"]==3) {$query ="UPDATE aitta SET varaus = '1' WHERE nimi = aitta05;";}
			break;
		default:
			$query = "SELECT * FROM `nyt`";
			break;
		}

    $result_insert = mysqli_query($conn,$query);
    header("Refresh:10; url=index.php");
?>