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
			case "tettapaikka8":
		$query="SELECT varaus FROM telttapaikatpieni WHERE nimi='paikka08'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		if ($row["varaus"]==1) {$query ="UPDATE telttapaikatpieni SET varaus = '2' WHERE nimi = 'paikka08';";}
		if ($row["varaus"]==2) {$query ="UPDATE telttapaikatpieni SET varaus = '3' WHERE nimi = 'paikka08';";}
		if ($row["varaus"]==3) {$query ="UPDATE telttapaikatpieni SET varaus = '1' WHERE nimi = 'paikka08';";}
			break;
			case "tettapaikka9":
		$query="SELECT varaus FROM telttapaikatpieni WHERE nimi='paikka09'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		if ($row["varaus"]==1) {$query ="UPDATE telttapaikatpieni SET varaus = '2' WHERE nimi = 'paikka09';";}
		if ($row["varaus"]==2) {$query ="UPDATE telttapaikatpieni SET varaus = '3' WHERE nimi = 'paikka09';";}
		if ($row["varaus"]==3) {$query ="UPDATE telttapaikatpieni SET varaus = '1' WHERE nimi = 'paikka09';";}
			break;
			case "tettapaikka10":
		$query="SELECT varaus FROM telttapaikatpieni WHERE nimi='paikka10'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		if ($row["varaus"]==1) {$query ="UPDATE telttapaikatpieni SET varaus = '2' WHERE nimi = 'paikka10';";}
		if ($row["varaus"]==2) {$query ="UPDATE telttapaikatpieni SET varaus = '3' WHERE nimi = 'paikka10';";}
		if ($row["varaus"]==3) {$query ="UPDATE telttapaikatpieni SET varaus = '1' WHERE nimi = 'paikka10';";}
			break;
			case "tettapaikka11":
		$query="SELECT varaus FROM telttapaikatpieni WHERE nimi='paikka11'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		if ($row["varaus"]==1) {$query ="UPDATE telttapaikatpieni SET varaus = '2' WHERE nimi = 'paikka11';";}
		if ($row["varaus"]==2) {$query ="UPDATE telttapaikatpieni SET varaus = '3' WHERE nimi = 'paikka11';";}
		if ($row["varaus"]==3) {$query ="UPDATE telttapaikatpieni SET varaus = '1' WHERE nimi = 'paikka11';";}
			break;
			case "tettapaikka12":
		$query="SELECT varaus FROM telttapaikatpieni WHERE nimi='paikka12'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		if ($row["varaus"]==1) {$query ="UPDATE telttapaikatpieni SET varaus = '2' WHERE nimi = 'paikka12';";}
		if ($row["varaus"]==2) {$query ="UPDATE telttapaikatpieni SET varaus = '3' WHERE nimi = 'paikka12';";}
		if ($row["varaus"]==3) {$query ="UPDATE telttapaikatpieni SET varaus = '1' WHERE nimi = 'paikka12';";}
			break;
			case "tettapaikka13":
		$query="SELECT varaus FROM telttapaikatpieni WHERE nimi='paikka13'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		if ($row["varaus"]==1) {$query ="UPDATE telttapaikatpieni SET varaus = '2' WHERE nimi = 'paikka13';";}
		if ($row["varaus"]==2) {$query ="UPDATE telttapaikatpieni SET varaus = '3' WHERE nimi = 'paikka13';";}
		if ($row["varaus"]==3) {$query ="UPDATE telttapaikatpieni SET varaus = '1' WHERE nimi = 'paikka13';";}
			break;
			case "tettapaikka14":
		$query="SELECT varaus FROM telttapaikatpieni WHERE nimi='paikka14'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		if ($row["varaus"]==1) {$query ="UPDATE telttapaikatpieni SET varaus = '2' WHERE nimi = 'paikka14';";}
		if ($row["varaus"]==2) {$query ="UPDATE telttapaikatpieni SET varaus = '3' WHERE nimi = 'paikka14';";}
		if ($row["varaus"]==3) {$query ="UPDATE telttapaikatpieni SET varaus = '1' WHERE nimi = 'paikka14';";}
			break;
			case "tettapaikka15":
		$query="SELECT varaus FROM telttapaikatpieni WHERE nimi='paikka15'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		if ($row["varaus"]==1) {$query ="UPDATE telttapaikatpieni SET varaus = '2' WHERE nimi = 'paikka15';";}
		if ($row["varaus"]==2) {$query ="UPDATE telttapaikatpieni SET varaus = '3' WHERE nimi = 'paikka15';";}
		if ($row["varaus"]==3) {$query ="UPDATE telttapaikatpieni SET varaus = '1' WHERE nimi = 'paikka15';";}
			break;
			case "tettapaikka16":
		$query="SELECT varaus FROM telttapaikatpieni WHERE nimi='paikka16'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		if ($row["varaus"]==1) {$query ="UPDATE telttapaikatpieni SET varaus = '2' WHERE nimi = 'paikka16';";}
		if ($row["varaus"]==2) {$query ="UPDATE telttapaikatpieni SET varaus = '3' WHERE nimi = 'paikka16';";}
		if ($row["varaus"]==3) {$query ="UPDATE telttapaikatpieni SET varaus = '1' WHERE nimi = 'paikka16';";}
			break;
			case "tettapaikka17":
		$query="SELECT varaus FROM telttapaikatpieni WHERE nimi='paikka17'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		if ($row["varaus"]==1) {$query ="UPDATE ttelttapaikatpieni SET varaus = '2' WHERE nimi = 'paikka17';";}
		if ($row["varaus"]==2) {$query ="UPDATE telttapaikatpieni SET varaus = '3' WHERE nimi = 'paikka17';";}
		if ($row["varaus"]==3) {$query ="UPDATE telttapaikatpieni SET varaus = '1' WHERE nimi = 'paikka17';";}
			break;
			case "tettapaikka18":
		$query="SELECT varaus FROM telttapaikatpieni WHERE nimi='paikka18'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		if ($row["varaus"]==1) {$query ="UPDATE telttapaikatpieni SET varaus = '2' WHERE nimi = 'paikka18';";}
		if ($row["varaus"]==2) {$query ="UPDATE telttapaikatpieni SET varaus = '3' WHERE nimi = 'paikka18';";}
		if ($row["varaus"]==3) {$query ="UPDATE telttapaikatpieni SET varaus = '1' WHERE nimi = 'paikka18';";}
			break;
			case "tettapaikka19":
		$query="SELECT varaus FROM telttapaikatpieni WHERE nimi='paikka19'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		if ($row["varaus"]==1) {$query ="UPDATE telttapaikatpieni SET varaus = '2' WHERE nimi = 'paikka19';";}
		if ($row["varaus"]==2) {$query ="UPDATE telttapaikatpieni SET varaus = '3' WHERE nimi = 'paikka19';";}
		if ($row["varaus"]==3) {$query ="UPDATE telttapaikatpieni SET varaus = '1' WHERE nimi = 'paikka19';";}
			break;
			case "tettapaikka20":
		$query="SELECT varaus FROM telttapaikatpieni WHERE nimi='paikka20'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		if ($row["varaus"]==1) {$query ="UPDATE telttapaikatpieni SET varaus = '2' WHERE nimi = 'paikka20';";}
		if ($row["varaus"]==2) {$query ="UPDATE telttapaikatpieni SET varaus = '3' WHERE nimi = 'paikka20';";}
		if ($row["varaus"]==3) {$query ="UPDATE telttapaikatpieni SET varaus = '1' WHERE nimi = 'paikka20';";}
			break;
			case "tettapaikka21":
		$query="SELECT varaus FROM telttapaikatpieni WHERE nimi='paikka21'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		if ($row["varaus"]==1) {$query ="UPDATE telttapaikatpieni SET varaus = '2' WHERE nimi = 'paikka21';";}
		if ($row["varaus"]==2) {$query ="UPDATE telttapaikatpieni SET varaus = '3' WHERE nimi = 'paikka21';";}
		if ($row["varaus"]==3) {$query ="UPDATE telttapaikatpieni SET varaus = '1' WHERE nimi = 'paikka21';";}
			break;
			case "tettapaikka22":
		$query="SELECT varaus FROM telttapaikatpieni WHERE nimi='paikka22'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		if ($row["varaus"]==1) {$query ="UPDATE telttapaikatpieni SET varaus = '2' WHERE nimi = 'paikka22';";}
		if ($row["varaus"]==2) {$query ="UPDATE telttapaikatpieni SET varaus = '3' WHERE nimi = 'paikka22';";}
		if ($row["varaus"]==3) {$query ="UPDATE telttapaikatpieni SET varaus = '1' WHERE nimi = 'paikka22';";}
			break;
			case "tettapaikka23":
		$query="SELECT varaus FROM telttapaikatpieni WHERE nimi='paikka23'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		if ($row["varaus"]==1) {$query ="UPDATE telttapaikatpieni SET varaus = '2' WHERE nimi = 'paikka23';";}
		if ($row["varaus"]==2) {$query ="UPDATE telttapaikatpieni SET varaus = '3' WHERE nimi = 'paikka23';";}
		if ($row["varaus"]==3) {$query ="UPDATE telttapaikatpieni SET varaus = '1' WHERE nimi = 'paikka23';";}
			break;
			case "tettapaikka24":
		$query="SELECT varaus FROM telttapaikatpieni WHERE nimi='paikka24'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		if ($row["varaus"]==1) {$query ="UPDATE telttapaikatpieni SET varaus = '2' WHERE nimi = 'paikka24';";}
		if ($row["varaus"]==2) {$query ="UPDATE telttapaikatpieni SET varaus = '3' WHERE nimi = 'paikka24';";}
		if ($row["varaus"]==3) {$query ="UPDATE telttapaikatpieni SET varaus = '1' WHERE nimi = 'paikka24';";}
			break;
			case "tettapaikka25":
		$query="SELECT varaus FROM telttapaikatpieni WHERE nimi='paikka25'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		if ($row["varaus"]==1) {$query ="UPDATE telttapaikatpieni SET varaus = '2' WHERE nimi = 'paikka25';";}
		if ($row["varaus"]==2) {$query ="UPDATE telttapaikatpieni SET varaus = '3' WHERE nimi = 'paikka25';";}
		if ($row["varaus"]==3) {$query ="UPDATE telttapaikatpieni SET varaus = '1' WHERE nimi = 'paikka25';";}
			break;
			case "tettapaikka26":
		$query="SELECT varaus FROM telttapaikatpieni WHERE nimi='paikka26'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		if ($row["varaus"]==1) {$query ="UPDATE telttapaikatpieni SET varaus = '2' WHERE nimi = 'paikka26';";}
		if ($row["varaus"]==2) {$query ="UPDATE telttapaikatpieni SET varaus = '3' WHERE nimi = 'paikka26';";}
		if ($row["varaus"]==3) {$query ="UPDATE telttapaikatpieni SET varaus = '1' WHERE nimi = 'paikka26';";}
			break;
			case "tettapaikka27":
		$query="SELECT varaus FROM telttapaikatpieni WHERE nimi='paikka27'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		if ($row["varaus"]==1) {$query ="UPDATE telttapaikatpieni SET varaus = '2' WHERE nimi = 'paikka27';";}
		if ($row["varaus"]==2) {$query ="UPDATE telttapaikatpieni SET varaus = '3' WHERE nimi = 'paikka27';";}
		if ($row["varaus"]==3) {$query ="UPDATE telttapaikatpieni SET varaus = '1' WHERE nimi = 'paikka27';";}
			break;
			case "tettapaikka28":
		$query="SELECT varaus FROM telttapaikatpieni WHERE nimi='paikka28'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		if ($row["varaus"]==1) {$query ="UPDATE telttapaikatpieni SET varaus = '2' WHERE nimi = 'paikka28';";}
		if ($row["varaus"]==2) {$query ="UPDATE telttapaikatpieni SET varaus = '3' WHERE nimi = 'paikka28';";}
		if ($row["varaus"]==3) {$query ="UPDATE telttapaikatpieni SET varaus = '1' WHERE nimi = 'paikka28';";}
			break;
		default:
			$query = "SELECT * FROM `nyt`";
			break;
		}

    $result_insert = mysqli_query($conn,$query);
    header("Refresh:0; url=index.php");
?>