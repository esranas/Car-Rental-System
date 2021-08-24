<?php
require_once "config.php";
require_once "session.php";
require_once 'header.php';
$error ='';

if($_SERVER['REQUEST_METHOD'] == "POST"  && isset($_POST['loginsubmit']))
	{
		
		$email = trim( $_POST['email']);
		$password = trim($_POST['password']);

		if(!empty($email))
		{
                $error .= '<p class="error"> Please enter your email</p>';
                echo $error;
        }
        if(!empty($password))
		{
                $error .= '<p class="error"> Please enter your password.</p>';
                echo $error;
        }
        if(empty($error)){
            if($query = $db->prepare("SELECT * FROM users WHERE email=?")){
                $query -> bind_param('s',$email);
                $query->execute();
                $row = $query ->fetch();
                if($row){
                    if(password_verify($password,$row['password'])){
                        $_SESSION["userid"]=$row['id'];
                        $_SESSION["user"] = $row;
                        header("Location: welcome.php");
                        exit;

                    }else{
                        $error .= '<p class="error">The password is not valid.</p>';               
                        echo $error; 
                    
                    }
                
            }
            else{
                $error .= '<p class="error">The password is not valid.</p>';
                echo $error; 
                
            }
        }
        $query->close();
    }
    mysqli_close($db);
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>LOG IN</title>
</head>
<body class="body">
<div class="container">
        <div class="row ">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">
                        LOG IN!
                    </div>
                    <div class="card-body">
                        <form action="#" method="post">
                           
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" class="form-control" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <br>
                                <button class="btn " type="submit" name="loginsubmit">Log In
                                    </button> 
                                    
                            </div>
                        </form>
                      <p>Don't have an account? <a href="signup.php">Sign Up here</a> </p> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html> 