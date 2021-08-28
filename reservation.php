<?php
require_once 'session.php';
require_once 'config.php';
require_once 'component.php';
require_once 'navbar.php';

function getCars()
{
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'rental-system';
    $db = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    $sql = " SELECT * FROM cars ";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) > 0) {
        return $result;
    }
}
?>
<?php
if (isset($_POST['Remove'])) {
    //    print_r($_GET['id']);
    if ($_GET['action'] == 'remove') {
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value["carID"] == $_GET['id']) {
                unset($_SESSION['cart'][$key]);
                echo "<script>alert('canceled renting')</script>";
                echo "<script>window.location:'reservation.php'</script>";
            }
        }
    }
}

?>
<?php
if (isset($_POST['Reserve'])) {
    // print_r($_GET['id']);
   
    $carID = $_GET['id'];
    $purpose = $_POST['purpose'];
    $pickupdate = date('Y-m-d',strtotime( $_POST['pickUpDate']));
    $decorate=$_POST['accept'];
  
    $sql="SELECT * FROM reservation WHERE carID=$carID ";
    
    $result = mysqli_query($db, $sql);

// echo $pickupdate;
    if (mysqli_num_rows($result)> 0) {
        $sql="SELECT * FROM reservation WHERE pickupdate='$pickupdate'";
        // echo $sql;
        
        $result1 = mysqli_query($db, $sql);
       
        if (mysqli_num_rows($result1)> 0) {
            
            echo "<script>alert('It is not available that day')</script>";
           
            // echo "1 is working";
           
        } else {
            $result2 = mysqli_query($db, "INSERT INTO reservation(carID,decor,purpose,pickupdate) VALUES('$carID','$decorate','$purpose','$pickupdate')");
           
            echo "<script>alert('you reserved it')</script>";
            
            // echo "2 is working";
        }
    }else{
        $result3 = mysqli_query($db, "INSERT INTO reservation(carID,decor,purpose,pickupdate) VALUES('$carID','$decorate','$purpose','$pickupdate')");
           
            echo "<script>alert('you reserved it')</script>";
            // echo "3 is working";
           
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    
    <title>Your Reservation</title>

</head>

<body class="reservation">
    <div class="container">
        <div class="row py-5">

      
                    <div class="reservation-cart">
                        <h5>Your Reservation</h5>

                        <?php
                        $carID = array_column($_SESSION['cart'], 'carID');
                        $result = getCars();
                        while ($row = mysqli_fetch_assoc($result)) {
                            foreach ($carID as $id) {
                                if ($row['carID'] == $id) {
                                    reservationCart($row['image'], $row['car name'], $row['price'], $row['carID']);
               
                                   
                                }
                            }
                        }

                        ?>
                    </div>
             </div>
             </div>
   
   
</body>

</html>
