<?php
	
	if(isset($_POST['req'])) {
	//Fetch all db data and return in an array
		 $all_records = array();
		 $connect = mysqli_connect("localhost:4306", "root", "", "deltaxx");
		 $query = "SELECT * FROM artist ORDER BY id DESC";
		 $result = mysqli_query($connect, $query);
		 while($row = mysqli_fetch_array($result)) {

		 	$formatted = array("id" => $row['id'], "artist" => $row['artist']);
		 	$records = array_push($all_records, $formatted);
		 }

		 $data = array(
		 	'allrecords' => $all_records
		 );

		 echo json_encode($data); 
	}

?>