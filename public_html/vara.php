<?php
	$conn = mysqli_connect('localhost','root','root','varaukset'); 
	switch ( $_GET["valinta"]) 
		{
		case "Aitta1":
		$query="SELECT varaus FROM aitta WHERE nimi='aitta01'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		if ($row["varaus"]==1) {$query ="UPDATE aitta SET varaus = '2' WHERE nimi = 'aitta01';";}
		if ($row["varaus"]==2) {$query ="UPDATE aitta SET varaus = '3' WHERE nimi = 'aitta01';";}
		if ($row["varaus"]==3) {$query ="UPDATE aitta SET varaus = '1' WHERE nimi = 'aitta01';";}
			break;
		case "aitta2":
		$query="SELECT varaus FROM aitta WHERE nimi='aitta02'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		if ($row["varaus"]==1) {$query ="UPDATE aitta SET varaus = '2' WHERE nimi = 'aitta02';";}
		if ($row["varaus"]==2) {$query ="UPDATE aitta SET varaus = '3' WHERE nimi = 'aitta02';";}
		if ($row["varaus"]==3) {$query ="UPDATE aitta SET varaus = '1' WHERE nimi = 'aitta02';";}
			break;
		case "aitta3":
		$query="SELECT varaus FROM aitta WHERE nimi='aitta03'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		if ($row["varaus"]==1) {$query ="UPDATE aitta SET varaus = '2' WHERE nimi = 'aitta03';";}
		if ($row["varaus"]==2) {$query ="UPDATE aitta SET varaus = '3' WHERE nimi = 'aitta03';";}
		if ($row["varaus"]==3) {$query ="UPDATE aitta SET varaus = '1' WHERE nimi = aitta03;";}
			break;
		case "aitta4":
		$query="SELECT varaus FROM aitta WHERE nimi='aitta04'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		if ($row["varaus"]==1) {$query ="UPDATE aitta SET varaus = '2' WHERE nimi = 'aitta04';";}
		if ($row["varaus"]==2) {$query ="UPDATE aitta SET varaus = '3' WHERE nimi = 'aitta04';";}
		if ($row["varaus"]==3) {$query ="UPDATE aitta SET varaus = '1' WHERE nimi = 'aitta04';";}
			break;
		case "aitta5":
		$query="SELECT varaus FROM aitta WHERE nimi='aitta05'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		if ($row["varaus"]==1) {$query ="UPDATE aitta SET varaus = '2' WHERE nimi = 'aitta05';";}
		if ($row["varaus"]==2) {$query ="UPDATE aitta SET varaus = '3' WHERE nimi = 'aitta05';";}
		if ($row["varaus"]==3) {$query ="UPDATE aitta SET varaus = '1' WHERE nimi = 'aitta05';";}
			break;
		case "aitta6":
		$query="SELECT varaus FROM aitta WHERE nimi='aitta6'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		if ($row["varaus"]==1) {$query ="UPDATE aitta SET varaus = '2' WHERE nimi = 'aitta6';";}
		if ($row["varaus"]==2) {$query ="UPDATE aitta SET varaus = '3' WHERE nimi = 'aitta6';";}
		if ($row["varaus"]==3) {$query ="UPDATE aitta SET varaus = '1' WHERE nimi = 'aitta6';";}
			break;
		case "aitta7":
		$query="SELECT varaus FROM aitta WHERE nimi='aitta7'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		if ($row["varaus"]==1) {$query ="UPDATE aitta SET varaus = '2' WHERE nimi = 'aitta7';";}
		if ($row["varaus"]==2) {$query ="UPDATE aitta SET varaus = '3' WHERE nimi = 'aitta7';";}
		if ($row["varaus"]==3) {$query ="UPDATE aitta SET varaus = '1' WHERE nimi = 'aitta7';";}
			break;
		case "aitta9":
		$query="SELECT varaus FROM aitta WHERE nimi='aitta8'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		if ($row["varaus"]==1) {$query ="UPDATE aitta SET varaus = '2' WHERE nimi = 'aitta9';";}
		if ($row["varaus"]==2) {$query ="UPDATE aitta SET varaus = '3' WHERE nimi = 'aitta9';";}
		if ($row["varaus"]==3) {$query ="UPDATE aitta SET varaus = '1' WHERE nimi = 'aitta9';";}
			break;
		case "aitta10":
		$query="SELECT varaus FROM aitta WHERE nimi='aitta10'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		if ($row["varaus"]==1) {$query ="UPDATE aitta SET varaus = '2' WHERE nimi = 'aitta10';";}
		if ($row["varaus"]==2) {$query ="UPDATE aitta SET varaus = '3' WHERE nimi = 'aitta10';";}
		if ($row["varaus"]==3) {$query ="UPDATE aitta SET varaus = '1' WHERE nimi = 'aitta10';";}
			break;
		case "aitta11":
		$query="SELECT varaus FROM aitta WHERE nimi='aitta11'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		if ($row["varaus"]==1) {$query ="UPDATE aitta SET varaus = '2' WHERE nimi = 'aitta11';";}
		if ($row["varaus"]==2) {$query ="UPDATE aitta SET varaus = '3' WHERE nimi = 'aitta11';";}
		if ($row["varaus"]==3) {$query ="UPDATE aitta SET varaus = '1' WHERE nimi = 'aitta11';";}
			break;
		case "aitta12":
		$query="SELECT varaus FROM aitta WHERE nimi='aitta12'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		if ($row["varaus"]==1) {$query ="UPDATE aitta SET varaus = '2' WHERE nimi = 'aitta12';";}
		if ($row["varaus"]==2) {$query ="UPDATE aitta SET varaus = '3' WHERE nimi = 'aitta12';";}
		if ($row["varaus"]==3) {$query ="UPDATE aitta SET varaus = '1' WHERE nimi = 'aitta12';";}
			break;
		case "aitta13":
		$query="SELECT varaus FROM aitta WHERE nimi='aitta13'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		if ($row["varaus"]==1) {$query ="UPDATE aitta SET varaus = '2' WHERE nimi = 'aitta13';";}
		if ($row["varaus"]==2) {$query ="UPDATE aitta SET varaus = '3' WHERE nimi = 'aitta13';";}
		if ($row["varaus"]==3) {$query ="UPDATE aitta SET varaus = '1' WHERE nimi = 'aitta13';";}
			break;
		case "aitta14":
		$query="SELECT varaus FROM aitta WHERE nimi='aitta14'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		if ($row["varaus"]==1) {$query ="UPDATE aitta SET varaus = '2' WHERE nimi = 'aitta14';";}
		if ($row["varaus"]==2) {$query ="UPDATE aitta SET varaus = '3' WHERE nimi = 'aitta14';";}
		if ($row["varaus"]==3) {$query ="UPDATE aitta SET varaus = '1' WHERE nimi = 'aitta14';";}
			break;
		case "tettapaikka1":
		$query="SELECT varaus FROM telttapaikatiso WHERE nimi='paikka01'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		if ($row["varaus"]==1) {$query ="UPDATE telttapaikatiso SET varaus = '2' WHERE nimi = 'paikka01';";}
		if ($row["varaus"]==2) {$query ="UPDATE telttapaikatiso SET varaus = '3' WHERE nimi = 'paikka01';";}
		if ($row["varaus"]==3) {$query ="UPDATE telttapaikatiso SET varaus = '1' WHERE nimi = 'paikka01';";}
			break;
		case "tettapaikka2":
		$query="SELECT varaus FROM telttapaikatiso WHERE nimi='paikka02'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		if ($row["varaus"]==1) {$query ="UPDATE telttapaikatiso SET varaus = '2' WHERE nimi = 'paikka02';";}
		if ($row["varaus"]==2) {$query ="UPDATE telttapaikatiso SET varaus = '3' WHERE nimi = 'paikka02';";}
		if ($row["varaus"]==3) {$query ="UPDATE telttapaikatiso SET varaus = '1' WHERE nimi = 'paikka02';";}
			break;
		case "tettapaikka3":
		$query="SELECT varaus FROM telttapaikatiso WHERE nimi='paikka03'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		if ($row["varaus"]==1) {$query ="UPDATE telttapaikatiso SET varaus = '2' WHERE nimi = 'paikka03';";}
		if ($row["varaus"]==2) {$query ="UPDATE telttapaikatiso SET varaus = '3' WHERE nimi = 'paikka03';";}
		if ($row["varaus"]==3) {$query ="UPDATE telttapaikatiso SET varaus = '1' WHERE nimi = 'paikka03';";}
			break;
			case "tettapaikka4":
		$query="SELECT varaus FROM telttapaikatiso WHERE nimi='paikka04'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		if ($row["varaus"]==1) {$query ="UPDATE telttapaikatiso SET varaus = '2' WHERE nimi = 'paikka04';";}
		if ($row["varaus"]==2) {$query ="UPDATE telttapaikatiso SET varaus = '3' WHERE nimi = 'paikka04';";}
		if ($row["varaus"]==3) {$query ="UPDATE telttapaikatiso SET varaus = '1' WHERE nimi = 'paikka04';";}
			break;
			case "tettapaikka5":
		$query="SELECT varaus FROM telttapaikatiso WHERE nimi='paikka05'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		if ($row["varaus"]==1) {$query ="UPDATE telttapaikatiso SET varaus = '2' WHERE nimi = 'paikka05';";}
		if ($row["varaus"]==2) {$query ="UPDATE telttapaikatiso SET varaus = '3' WHERE nimi = 'paikka05';";}
		if ($row["varaus"]==3) {$query ="UPDATE telttapaikatiso SET varaus = '1' WHERE nimi = 'paikka05';";}
			break;
			case "tettapaikka6":
		$query="SELECT varaus FROM telttapaikatiso WHERE nimi='paikka06'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		if ($row["varaus"]==1) {$query ="UPDATE telttapaikatiso SET varaus = '2' WHERE nimi = 'paikka06';";}
		if ($row["varaus"]==2) {$query ="UPDATE telttapaikatiso SET varaus = '3' WHERE nimi = 'paikka06';";}
		if ($row["varaus"]==3) {$query ="UPDATE telttapaikatiso SET varaus = '1' WHERE nimi = 'paikka06';";}
			break;

			case "tettapaikka7":
		$query="SELECT varaus FROM telttapaikatiso WHERE nimi='paikka07'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		if ($row["varaus"]==1) {$query ="UPDATE telttapaikatiso SET varaus = '2' WHERE nimi = 'paikka07';";}
		if ($row["varaus"]==2) {$query ="UPDATE telttapaikatiso SET varaus = '3' WHERE nimi = 'paikka07';";}
		if ($row["varaus"]==3) {$query ="UPDATE telttapaikatiso SET varaus = '1' WHERE nimi = 'paikka07';";}
			break;

		default:
			$query = "SELECT * FROM `nyt`";
			break;
		}

    $result_insert = mysqli_query($conn,$query);
    header("Refresh:0; url=index.php");
?>