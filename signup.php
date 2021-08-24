<?php
require_once "config.php";
require_once "session.php";
require_once 'header.php';


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
        $error .= '<p>the email address is already registered!</p>';
        echo $error;
    } else{
        //validate password
        if(strlen($password)< 6){
            $error .= '<p>Password must be at least 6 characters.</p>';
            echo $error;
        }
        if(empty($confirm_password)){
            $error .= '<p>Please enter password again to confirm.</p>';
            echo $error;
        }else{
            if(empty($error) && ($password != $confirm_password)){
                $error .= '<p>Password did not match.</p>';
            echo $error;
            }
        }
         if(empty($error)){
            $insertQuery = $db ->prepare("INSERT INTO users (name,email,phone,password) VALUES (?,?,?,?);");

            $insertQuery->bind_param("ssss",$fullName,$email,$phone,$password);
            
            $result=$insertQuery->execute();
            
            if($result){
                $error.= '<p>your registration is successful!</p>';
                echo $error;
            }
            else{
                $error.= '<p>something went wrong!</p>';
                echo $error;
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
                                <button class="btn btn-primary btn-block btn-md" type="submit" name="submit">Sign Up</button>
                            </div>
                        </form>
                       <p>Already have an account? <a href="login.php">Login here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>