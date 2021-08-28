<?php
require_once "session.php";
require_once 'config.php';
require_once  'component.php';
require_once 'navbar.php';


function getCars(){
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass= '';
$dbname = 'rental-system';
$db = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
$sql = " SELECT * FROM cars ";
 $result = mysqli_query($db,$sql);
    if(mysqli_num_rows($result)>0){
        return $result;
    }
 
}
?>
<?php 
if(isset($_POST['reserve'])){
//  echo ($_POST['carID']);
if(isset($_SESSION['cart'])){

    $carID = array_column($_SESSION['cart'], "carID");

    if(in_array($_POST['carID'], $carID)){
       
        echo "<script>alert('It already is reserved!')</script>";
        echo "<script>window.location = 'cars.php'</script>";
    }else{

        $count = count($_SESSION['cart']);
        $item_array = array(
            'carID' => $_POST['carID']
        );

        $_SESSION['cart'][$count] = $item_array;
    }

}else{

    $item_array = array(
            'carID' => $_POST['carID']
    );

    
    $_SESSION['cart'][0] = $item_array;
    // print_r($_SESSION['cart']);
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
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <title>Reserve</title>
</head>

<body>


    <div class="container">
        <div class="row text-center py-5">
            <?php
         $result = getCars();
         while($row = mysqli_fetch_assoc($result)){
             component($row['carID'],$row['car name'],$row['carDetails'],$row['price'],$row['image']);
         }
          ?>
        </div>
    </div>
    <div class="reserved-car">
        <a href="reservation.php" class="rounded">
            
                <i class="fas fa-car-side"> </i>
            
            <?php
            if(isset($_SESSION['cart'])){
                $count=count($_SESSION['cart']);
                echo " <span id=\"cart_count\" > $count </span>";
            }else{
                echo " <span id=\"cart_count\" > 0 </span>"; 
            }
            ?>
        </a>
    </div>
    <script type="text/javascript" src="script.js"></script> 
</body>

</html>
<style>
   
    i{
        color: black;
    }
    a{
        color: black;
        text-decoration: none;
    }
.reserved-car{
border:2px solid black;
border-radius: 5px;
background-color: #F3F1F5;
font-size: 25px;
text-align: center;
height: 40px;
width: 90px;
position: absolute;
    top: 10px;
    right: 35px; 
}
.card-shadow{
    background-color: #F3F1F5;
}
</style>