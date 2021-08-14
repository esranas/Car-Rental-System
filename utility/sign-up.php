<?php
include 'connection.php';
if(isset($_POST['submit']))
{
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

     $hashedPassword = password_hash($password, PASSWORD_DEFAULT);// okunmamasi icin kullaniliyor
    // echo "Normal Password: ", $password ," Hashed password", $hashedPassword;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "<div class='alert alert-danger'>" ,
        "enter a proper format",
        "</div>";
    }
  
   
    else{
        if(strlen($password)<8){
            echo "<div class='alert alert-danger'>",
            "password need to be at least 8 characters.",
        "</div>"; 
    }
    else{
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result =mysqli_query($connection,$sql);
        
        if(mysqli_num_rows($result)>0){
            echo  "<div class='alert alert-danger'>" ,
            "User already exists. Please enter a new email.",
            "</div>";
        }
        else{
                $sql = "INSERT INTO users(firstName,lastName,email,phone,password) VALUES('$firstName','$lastName','$email',$phone,'$password')";
                $result = mysqli_query($connection,$sql);
               if($result){
                echo "<div class='success success-danger'>" ,
                "user created succesfully click <a href='login.php'>login</a>",
                "</div>";
                        // if(!$result){ echo mysqli_error($connection); 
            
               }
            }  
        } 
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
    <title>Sign Up!</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        SIGN UP!
                    </div>
                    <div class="card-body">
                        <form action="#" method="post">
                            <div class="form-group">
                                <label for="firstName">First Name</label>
                                <input type="text" name="firstName" id="firstName" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="lastName">Last Name</label>
                                <input type="text" name="lastName" id="lastName" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" id="phone" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block btn-md" type="submit" name="submit">Sign
                                    Up</button>
                            </div>
                        </form>
                        or <a href="login.php"> login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>