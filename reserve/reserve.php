<?php
session_start();
require_once '../utility/connection.php';
require_once '../utility/header.php';
require_once '../utility/navbar.php';
require_once '../utility/footer.php';
require_once  '../php/component.php';



function getCars(){
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass= '';
$dbname = 'car-rental-system';
$connection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
$sql = " SELECT * FROM cars ";
 $result = mysqli_query($connection,$sql);
    if(mysqli_num_rows($result)>0){
        return $result;
    }
}
?>
<?php 
if(isset($_POST['reserve'])){
//  echo ($_POST['carID']);
if(isset($_SESSION['cart'])){
    print_r($_SESSION['cart']);
    // echo "buraa1";

}else{
    $item_array = array('carID' => $_POST['carID']);
    //create new session variable
    $_SESSION['cart'][0] = $item_array;
    print_r($_SESSION['cart']);
    // echo "bura";
}
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <title>Reserve</title>
</head>

<body>
    <div class="hero"></div>


    <div class="container">
        <div class="row text-center py-5">
            <?php
         $result = getCars();
         while($row = mysqli_fetch_assoc($result)){
             component($row['car name'],$row['price'],$row['image'],$row['carID']);
         }
          ?>
        </div>
    </div>
</body>

</html>