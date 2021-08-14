

 <?php
require_once 'connection.php';
require_once 'header.php';
require_once 'navbar.php';
session_start();
if($_SESSION['authCheck'] != true){
   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Home</title>

</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h1>welcome <?php echo $_SESSION['name']; ?></h1>
            <a href="log-out.php"> <button>Log Out</button></a>
        </div>
    </div>
    
</body>
</html> 