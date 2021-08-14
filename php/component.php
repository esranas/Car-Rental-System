

<?php
require_once '../utility/connection.php';


function component($carname, $price, $img,$carID){
    $element = "
    
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0 box\">
    <form action=\"reserve.php\" method=\"post\">
        <div class=\"card shadow\">
            <div>
                <img src=\"$img\" alt=\"image1\" class=\"img-fluid card-img-top\">

            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\">$carname</h5>
                <h6><i class=\"fas fa-star\"></i></h6>
                <p class=\"card-text\">
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <h5>
                    <span class=\"price\">
                     $price
                    </span>
                </h5>
                <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"reserve\"> Reserve <iclass=\"fas fa-calender\"></i></button>
                 <input type=\"hidden\"  name=\"carID\" value=\"$carID\">

            </div>
        </div>
    </form>
</div>
    ";
    echo $element;

}



  
    
?>