<?php 
 require_once 'header.php';
 require_once 'navbar.php'; 
?>

<!-- <!DOCTYPE html> -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Welcome </title>
</head>

<body>

    <section id="hero">
        <div class="container">
            <div class="d-flex h-100 flex-column text-light justify-content-center">
                <h1 class="display-1">CLASSIC CARS</h1>
                <p class="lead">Find Best Classic Cars in Your Area.</p>
            </div>
        </div>
    </section>

    <section class="generic" id="about">
        <div class="container">
            <br>
            <br>
            <h2 class="display-5  mb-5">You Can Find Cars For Every Occasion. </h2>
            <div class="row mb-4">
                <div class="col-sm-12 col-md-8 carts">
                    <div class="d-flex h-100 flex-column justify-content-center">
                        <p>All our cars are offered to you at the best possible price.
                        </p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 p-0">
                    <img class="img-fluid" src="images/key.jpg">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-8 carts">
                    <div class="d-flex h-100 flex-column justify-content-center">
                        <p>Pick Up your car from us. You only need to sign a contract. That is all.
                        </p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 order-first p-0">
                    <img class="img-fluid" src="images/weddingcar.jpg">
                </div>
            </div>
        </div>
    </section>
<div class="minimizable">
<button type="button" class="collapsible text-secondary">Originial Cars</button>
<div class="content">
  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt ad repellat cum ipsam dolorem!</p>
</div>
<button type="button" class="collapsible text-secondary">Clean Service</button>
<div class="content">
  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt ad repellat cum ipsam dolorem!</p>
</div>
<button type="button" class="collapsible text-secondary">Extra Services</button>
<div class="content">
  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt ad repellat cum ipsam dolorem!</p>
</div>



</div>


<script type="text/javascript" src="script.js"></script> 

</body>

</html>

<style>
   
    h1{
      
    font-family: 'Mate SC', serif;
   text-transform: uppercase;
    }
    h2{
        
    font-family: 'Mate SC', serif;
    text-transform: uppercase;
    color: black;
}
    
    
    p{
    font-family: 'Mate SC', serif;
    text-transform: uppercase;
}
</style>