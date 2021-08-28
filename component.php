
<head>
    <link rel="stylesheet" href="component.css">
</head>

<?php
require_once 'config.php';
require_once "session.php";



function component($carID, $carname, $productDetails, $price, $img)
{
    $element = "
    
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0 box\">
    <form action=\"cars.php\" method=\"post\">
        <div class=\"card shadow border\">
            <div>
                <img src=\"$img\" alt=\"image\" class=\"img-fluid card-img-top\">

            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\">$carname</h5>
                
                <p class=\"card-text\">
                    $productDetails
                </p>
                <h5>
                    <span class=\"price\">
                      $ $price
                    </span>
                </h5>
                <button type=\"submit\" class=\"btn my-3 btn-outline-dark\" name=\"reserve\"> Reserve </button>
                 <input type=\"hidden\"  name=\"carID\" value=\"$carID\">

            </div>
        </div>
    </form>
</div>
    ";
    echo $element;
}

function reservationCart($img, $carname, $price, $carID)
{
    $element = "
    
    <div class=\"reservationCart col-md-4 col-sm-6 my-4 my-md-0 p-3\">
    <form action=\"reservation.php?action=remove&id=$carID \" method=\"post\" class=\"form-group\">
                
                <img class=\"img-fluid card-img-top\" src=\"$img\" >
                <h5>$carname</h5>
                <h5>$ $price per day</h5>
                 <hr>
            <button type=\"submit\" class=\" btn btn-outline-dark cancel\" name=\"Remove\" >
            Cancel </button> 
            </form>
            <form action=\"reservation.php?action=reserve&id=$carID \" method=\"post\" class=\"form-group\">
            <input type=\"checkbox\" id=\"checkbox\"  name=\"accept\" value=\"decorate\" >
            <label for=\"checkbox\" class=\"label\">  I want the car to be decorated.</label>
            <label for=\"purpose\" class=\"label\">For what purpose do you want to rent?</label>
            <br>
            <select name=\"purpose\" id=\"purpose\">
            <option value=\"Wedding\">Wedding</option>
            <option value=\"prom\">Prom</option>
            <option value=\"photoshoot\">Photoshoot</option>
            <option value=\"other\">Other</option>
            </select>
          <br>
               <label for=\"pickUpDate\" class=\"label\">Pick Up date</label>
                <br>
            <input type=\"date\" id=\"pickUpDate\"  name=\"pickUpDate\" >
            <br>
            
            <button  type=\"submit\" name=\"Reserve\" id=\"reserve\" class=\"btn  my-3 btn-outline-dark\">Reserve</button>   
</form> 
</div> <br>";
    echo $element;
}



?>

