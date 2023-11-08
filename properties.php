<?php
if(isset($_POST["select_btn1"])){
    $pgname = $_POST["hostel1"];
    $bedtype = $_POST["bedtype1"];
    $price = $_POST["price1"];
    $errors = array();

    if(count($errors)>0){
        foreach ($errors as $error){
            echo "<div class = 'alert alert-danger'>$error</div>";
        }


    }else{
        require_once "database.php";
        $sql = "INSERT INTO users (pgname , bedtype , price) VALUES (?,?,?)";
        $stmt = mysqli_stmt_init($conn);
        $preparestmt = mysqli_stmt_prepare($stmt,$sql);
        if($preparestmt){
            mysqli_stmt_bind_param($stmt,"sss",$fullname,$email,$password);
            mysqli_stmt_execute($stmt);
            header('Location:dashboard.php');
            
        }else{
            die("something went wrong");
        }

    }

}
?>