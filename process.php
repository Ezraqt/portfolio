<?php
include('connect.php');
if (isset($_POST["create"])) {
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $subject = mysqli_real_escape_string($conn, $_POST["subject"]);
    $message = mysqli_real_escape_string($conn, $_POST["message"]);
    $sqlInsert = "INSERT INTO contact(name , email , subject , message) VALUES ('$name','$email','$subject', '$message')";
    if(mysqli_query($conn,$sqlInsert)){
        session_start();
        $_SESSION["create"] = "Book Added Successfully!";
        header("Location:contact.php");
    }else{
        die("Something went wrong");
    }
}
?>