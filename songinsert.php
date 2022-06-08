<?php

// php code to Insert data into mysql database from input text
if(isset($_POST['insert']))
{
    $hostname = "localhost:4306";
    $username = "root";
    $password = "";
    $databaseName = "deltaxx";
    
    // get values form input text and number

    $cover = $_POST['cover'];
    $song = $_POST['song'];
    $artist = $_POST['artist'];
    $date = $_POST['date'];
    $rate = $_POST['rate'];
    $email = $_POST['email'];
    
    // connect to mysql database using mysqli

    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    
    // mysql query to insert data

    $query = "INSERT INTO `song`(`cover`, `song`, `artist`,`date`, `rate`, `email`) VALUES ('$cover','$song','$artist','$date','$rate','$email')";
    
    $result = mysqli_query($connect,$query);
    
    // check if mysql query successful

    if($result)
    {
        header('Location: index.php');
    }

    
    mysqli_close($connect);
}

?>