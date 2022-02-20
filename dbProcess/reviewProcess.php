<?php

require_once('../db.php');

if (isset($_POST["reviewBtn"])) {

    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $identity = $_POST['whoYou'];
    // $image = $_POST['image'];
    $review = ($_POST['review']);


    $status = 1;
    $sql = "INSERT INTO `review`(`fname`, `email`, `identity`, `review`) VALUES ('$fname','$email','$identity','$review')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Thanks for your valuable feedback!...')
        window.location.href='../index.php';
        </SCRIPT>");
    } else {
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Sorry! Try Later...')
        window.location.href='../index.php';
        </SCRIPT>");
    }
}
