<?php
 $conn = mysqli_connect('localhost','root','root','varaukset');
    if (!$conn){
    echo "<h2>Ei yhteyttä tietokantaan</h2>";
    }
    else {
        /*switch ($_GET['@']) {
            case "Class":
                $query ="SELECT * FROM alltunes ORDER BY ID ASC";
                echo "Class";
            break;
            case "Tuner":
                $query ="SELECT * FROM alltunes ORDER BY Tuner ASC";
                echo "Tuunaaja";
            break;
            case "Car_year":
                $query ="SELECT * FROM alltunes ORDER BY Year ASC";
                echo "Car_year";
            break;
            case "Car_name":
                $query ="SELECT * FROM alltunes ORDER BY ManufacturerCar_name ASC";
                echo "Car_name";
            break;
            case "Tarkoitus":
                $query ="SELECT * FROM alltunes ORDER BY purpose ASC";
                echo "Tarkoitus";
            break;
            default:
            break;
        }*/
        $query = "UPDATE nyt SET varaus = '2' WHERE nimi = '" + $_GET['@']+"'";
    }
    $result_insert = mysqli_query($conn,$query);
    header("Refresh:0; url=index.php");
?>