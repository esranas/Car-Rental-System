
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sign Up!</title>
</head>

<body class="body">
    <div class="container">
        <div class="row ">
            <div class="col-md-5">
                <div class="card " >
                    <div class="card-header">
                        SIGN UP!
                    </div>
                    <div class="card-body">
                        <form action="#" method="post">
                            <div class="form-group">
                                <label for="fullName">Full Name</label>
                                <input type="text" name="fullName" id="fullName" class="form-control" required>
                            </div>
                           
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="phone" name="phone" id="phone" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="confirm_password"> Confirm Password</label>
                                <input type="password" name="confirm_password" id="confirm_password" class="form-control" required>
                            </div>
                            
                            <div class="form-group">
                                <br>
                                <button class="btn  btn-block btn-md" type="submit" name="submit">Sign Up</button>
                            </div>
                        </form>
                       <p>Already have an account? <a href="login.php" class="link">Login here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php
require_once 'header.php';
require_once "config.php";
require_once "session.php";

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])){

$fullName = trim($_POST['fullName']);
$email = trim($_POST['email']);
$phone= trim($_POST['phone']);
$password = trim($_POST['password']);
$confirm_password = trim($_POST['confirm_password']);


if($query = $db -> prepare("SELECT * FROM users WHERE email =? ")){
    $error ='';
    //bind parameters (s = string), in our case the username is a string so we use "s"
    $query->bind_param('s',$email); 
    $query -> execute();
    //store the result so we can check if the account exists in the database
    $query->store_result();
   
    if($query->num_rows >0){
        
        echo "<div class=' alert alert-danger' > the email is already registered.</div>";
    } else{
        //validate password
        if(strlen($password)< 6){
            
            echo "<div class=' alert alert-danger' > Password must be at least 6 characters.</div>";
        }
        if(empty($confirm_password)){
            
            echo "<div class=' alert alert-danger' > Please enter password again to confirm.</div>";
        }else{
            if(empty($error) && ($password != $confirm_password)){
           
            echo "<div class=' alert alert-danger' > Password did not match.</div>";
            }
        }
         if(empty($error)){
            $insertQuery = $db ->prepare("INSERT INTO users (name,email,phone,password) VALUES (?,?,?,?);");

            $insertQuery->bind_param("ssss",$fullName,$email,$phone,$password);
            
            $result=$insertQuery->execute();
            
            if($result){
               
                echo "<div class=' alert alert-success' > User created succesfully.</div>";
                header( "Refresh:0.01; url=welcome.php", true, 303);//I added this line because login.php does not work
            }
            else{
               
                echo "<div class=' alert alert-success' >something went wrong!</div>";
            }

            $insertQuery->close();
        }
    }

}
$query->close();

//close db connection
mysqli_close($db);

}
?>


<style>
    .link{
        text-decoration: none;
        color: white;
    }
</style>