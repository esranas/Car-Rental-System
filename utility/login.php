<?php 
include 'connection.php';
if(isset($_POST['loginsubmit'])){
    $email = mysqli_real_escape_string($connection,$_POST['email']);
    $password =  mysqli_real_escape_string($connection,$_POST['password']);

    $sql = "SELECT * FROM `users` WHERE  email = '$email' ";
    
    $result = mysqli_query($connection,$sql);
    
    $count = mysqli_num_rows($result);
    
    if($count==0){
        while ($rows = mysqli_fetch_assoc($result))
        {
            if(password_verify($password, $rows['password'])){
                $name = $rows['firstName'] . " ". $rows['lastName'];
                session_start();
                 $_SESSION['name'] = $name;
                $_SESSION['authCheck']=true;
                header("Location:../index.php");
            }
            else{
               echo "<div class='alert alert-danger'>" ,
        "incorrect  password",
        "</div>";
            }
        }
    }
    else{ 
        echo "wrong one";
    }
}


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>LOG IN</title>
</head>
<body>
<div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        LOG IN!
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                           
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" class="form-control" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success btn-block btn-md" type="submit" name="loginsubmit">Log In
                                    </button> 
                                    
                            </div>
                        </form>
                        or <a href="sign-up.php">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>