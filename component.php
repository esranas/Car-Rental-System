<?php
require_once 'config.php';
require_once "session.php";


function component($carID,$carname,$productDetails, $price, $img){
    $element = "
    
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0 box\">
    <form action=\"cars.php\" method=\"post\">
        <div class=\"card shadow\">
            <div>
                <img src=\"$img\" alt=\"image\" class=\"img-fluid card-img-top\">

            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\">$carname</h5>
                <h6><i class=\"\"></i></h6>
                <p class=\"card-text\">
                    $productDetails
                </p>
                <h5>
                    <span class=\"price\">
                      $ $price
                    </span>
                </h5>
                <button type=\"submit\" class=\"btn  my-3\" name=\"reserve\"> Reserve </button>
                 <input type=\"hidden\"  name=\"carID\" value=\"$carID\">

            </div>
        </div>
    </form>
</div>
    ";
    echo $element;

}

function reservationCart($img,$carname,$price,$carID){
    $element="
    <form action=\"reservation.php?action=remove&id=$carID \" method=\"post\" class=\"\">
    <div class=\"border-rounded\">
        <div class=\"row bg-white\">
            <div class=\"\">
                <img src=\"$img\" alt=\"\">
            </div>
            <div class=\"\">
                <h5>$carname</h5>
                <h5>$ $price</h5>
                
            </div>
            <div>
            <div>  <button type=\"submit\" name=\"Remove\" >Remove</button> </div>
            </form>
            <form action=\"reservation.php?action=reserve&id=$carID \" method=\"post\" class=\"\">
            
<label for=\"purpose\">For what purpose do you want to rent?</label>

<select name=\"purpose\" id=\"purpose\">
  <option value=\"Wedding\">Wedding</option>
  <option value=\"prom\">Prom</option>
  <option value=\"photoshoot\">Photoshoot</option>
  <option value=\"other\">Other</option>
</select>
</div>
            <div class=\"date\">
          
                <div id=\"pickup_date\"><label for=\"pickUpDate\">Pick Up date</label>
                <input type=\"date\" id=\"pickUpDate\"  name=\"pickUpDate\" runat=\"server\">
                </div>
               
                
            </div>
            
            
            <div>  <button  type=\"submit\" name=\"Reserve\" id=\"reserve\">Reserve</button>
            
            </div>
            
           
        </div>
    </div>
</form>";
echo $element;
}

  
    
?>
