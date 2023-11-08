<?php
$con = mysqli_connect("localhost","root","");
if(isset($_POST['login_Btn'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM websitelogin.users WHERE email = '$email' ";
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_assoc($result)){
        $resultPassword = $row['password'];
        if($password == $resultPassword){
            header('Location:homepage2.html');
        }else{
            echo "login unsuccessful";
        }
    }
}
?>