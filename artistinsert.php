<?php 

// artist form data insrted 

     $connect = mysqli_connect("localhost:4306", "root", "", "deltaxx"); 
     if(!empty($_POST))  
 	 { 
 	 	$output = '';  
      	$message = ''; 

      	$artist = mysqli_real_escape_string($connect, $_POST["artist"]);
      	$dob = mysqli_real_escape_string($connect, $_POST["dob"]);  
        $bio = mysqli_real_escape_string($connect, $_POST["bio"]);

        $query = " INSERT INTO artist(artist, dob, bio)  VALUES('$artist', '$dob', '$bio')";  
    

	    if(mysqli_query($connect, $query))  
	    {
	    	 $message = 'Data Inserted';
           	 echo json_encode($message);
        }
	}   
?>