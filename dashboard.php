<?php
include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Dashboard</title>

     <link rel="stylesheet" href="dashboard.css">
     <link rel="stylesheet" href="https://cdjns.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>
<body>
    <div class="navbar-top">
        <div class="title">
            <h1>Dashboard</h1>
        </div>
        <ul>
            <li>
                <a href="#sign-out">
                    <i class="fa fa-sign-out-alt fa-2x"></i>
                </a>
            </li>
        </ul>
    </div>
    <div class="sidenav">
        <div class="profile">
            <img src="profile.png" alt="" width="100" height="100">

            <div class="name">
            <?php 
                            $query = "SELECT * FROM users ORDER BY ID DESC";
                            $query_run = mysqli_query($conn , $query);
                            
                            
                            while($row = mysqli_fetch_array($query_run))
                            {
                            ?>
                            <td>:</td>
                            <td><?php echo $row['user_name'];?></td>
                            <?php }
                            ?>
            </div>
            <div class="contact">
            <?php 
                            $query = "SELECT * FROM users ORDER BY id DESC";
                            $query_run = mysqli_query($conn , $query);
                            while($row = mysqli_fetch_array($query_run))
                            {
                            ?>
                            <td>:</td>
                            <td><?php echo $row['email'];?></td>
                            <?php }
                            ?>
            </div>
        </div>

        <div class="sidenav-url">
            <div class="url">
                <a href="homepage.html" class="active">Log Out</a>
                <a href="payment.html" class="active">Pay</a>
                <form action="homepage.html"></form>
                <hr align="center">
            </div>
        </div>
    </div>
    <div class="main">
        <h2>CURRENT BOOKING</h2>
        <div class="card">
            <div class="card-body">
                <i class="fa fa-pen fa-xs edit"></i>
                <table>
                    <tbody>
                        <tr>
                            <th>Name</th>
                            <?php 
                            $query = "SELECT * FROM users ORDER BY id DESC";
                            $query_run = mysqli_query($conn , $query);
                            
                            
                            while($row = mysqli_fetch_array($query_run))
                            {
                            ?>
                            <td>:</td>
                            <td><?php echo $row['user_name'];?></td>
                            <?php }
                            ?>
                           
                        </tr>
                        <tr>
                            <th>Email</th>
                            <?php 
                            $query = "SELECT * FROM users ORDER BY id DESC";
                            $query_run = mysqli_query($conn , $query);
                            while($row = mysqli_fetch_array($query_run))
                            {
                            ?>
                            <td>:</td>
                            <td><?php echo $row['email'];?></td>
                            <?php }
                            ?>
                        </tr>
                        <tr>
                            <th>PG name</th>
                            <?php 
                            $query = "SELECT * FROM users2 ORDER BY id DESC";
                            $query_run = mysqli_query($conn , $query);
                            while($row = mysqli_fetch_array($query_run))
                            {
                            ?>
                            <td>:</td>
                            <td><?php echo $row['pgname'];?></td>
                            <?php }
                            ?>
                        </tr>
                        <tr>
                            <th>Bed type</th>
                            <?php 
                            $query = "SELECT * FROM users2 ORDER BY id DESC";
                            $query_run = mysqli_query($conn , $query);
                            while($row = mysqli_fetch_array($query_run))
                            {
                            ?>
                            <td>:</td>
                            <td><?php echo $row['bedtype'];?></td>
                            <?php }
                            ?>
                        </tr>
                        <tr>
                            <th>Price</th>
                            <?php 
                            $query = "SELECT * FROM users2 ORDER BY id DESC";
                            $query_run = mysqli_query($conn , $query);
                            while($row = mysqli_fetch_array($query_run))
                            {
                            ?>

                            <td>:</td>
                            <td><?php echo $row['price'];?></td>
                            <?php }
                            ?>
                        </tr>
                        <tr>
                            <th>Area Location</th>
                            <td>:</td>
                            <td>Bhopal</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <h2>ROOM FACILITIES</h2>
        <div class="card">
            <div class="card-body">
                <i class="fa fa-pen fa-xs edit"></i>
                <table>
                    <tbody>
                        <tr>
                            <td>- WIFI available</td>
                        </tr>
                        <tr>
                            <td>- Inbuild Kitchen</td>
                        </tr>
                        <tr>
                            <td>- Cook available</td>
                        </tr>
                        <tr>
                            <td>- Seperate bathrooms</td>
                        </tr>
                        <tr>
                            <td>- Cleaning facility</td>
                        </tr>
                        <tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>