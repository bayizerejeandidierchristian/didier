<?php
    session_start();
        include 'connection.php';
        if ($_POST>0) {
            $submit=$_POST['submit'];
           $_SESSION['email'] = $email;
            $token = $_SESSION['token'] = md5(date('i:m:h').$email);
            if(strlen($pword)<8){
                echo "<script>alert('Password must be above 8 letters'),window.location.replace('signup.php')</script>";
                
            }
            

    $select = mysqli_query($conn, "SELECT * FROM users WHERE email = '".$_POST['email']."'");
    if(mysqli_num_rows($select)) {
        exit('This email address is already used!'."<script>alert('Your email exist find other one'),window.location.replace('signup.php')</script>");
                                }
    else{
                $insert= $conn->query("INSERT INTO Users VALUES(NULL,'$submit')");
                if($insert){
                    header("location:logout.php");  
                }
        }
        }
            ?>