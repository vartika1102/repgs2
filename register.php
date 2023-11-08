<?php
if(isset($_POST["register_btn"])){
    $fullname = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $errors = array();

   


    if(empty($fullname) OR empty($email) OR empty($password)){
        array_push($errors,"All feilds are required");
    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        array_push($errors,"Email is not valid");
    }
    if(strlen($password)<8){
        array_push($errors,"Password must be atleast 8 charachters long");
    }

    if(count($errors)>0){
        foreach ($errors as $error){
            echo "<div class = 'alert alert-danger'>$error</div>";
        }


    }else{
        require_once "database.php";
        $sql = "INSERT INTO users (user_name , email , password) VALUES (?,?,?)";
        $stmt = mysqli_stmt_init($conn);
        $preparestmt = mysqli_stmt_prepare($stmt,$sql);
        if($preparestmt){
            mysqli_stmt_bind_param($stmt,"sss",$fullname,$email,$password);
            mysqli_stmt_execute($stmt);
            echo "<div class = 'alert alert-success'>You are registered successfully</div>";
            header('Location:homepage2.html');
            
        }else{
            die("something went wrong");
        }

    }

}
?>