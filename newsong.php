<?php
	$connect = mysqli_connect("localhost:4306", "root", "", "deltaxx");   
 	$query = "SELECT * FROM artist ORDER BY id DESC";
 	$result = mysqli_query($connect, $query); 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Spotify like website</title> 
  
	<style>
		.form-inline {
		     margin-left: 70%;
		}
		.form-control{
		  width:50%;
		}
		.custom-file-control::after {
		  content: "Choose file...";
		}
		.custom-file-control::before {
		  content: "Browse";
		}
	</style>
</head>
<body>

	<!-- Header section-->
		<nav class="p-3 navbar navbar-expand-sm bg-light navbar-light">
		    <ul class="navbar-nav ml-5">
		      <li class="nav-item active">
		        <a class="nav-link font-weight-bold" href="index.php">HOME</a>
		      </li>
		    </ul>
		    <form class="form-inline">
		    	<input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
		    	<button class="btn btn-info" type="submit"><i class="fa fa-search"></i></button>
		  </form>
		</nav>
	<!-- Header section end -->

	<!--Form-->

	  <br><br><br>

	<div class="container">
	    <div class="row">
	      <div class="col-sm-10 p-3 border rounded main-section" style="margin-left:100px;">
	        <h3 class="text-center text-inverse">Adding a new Song</h3>
	        <hr>
	        <form class="container" id="needs-validation" action="songinsert.php" method="post" novalidate>
	        
	          <div class="form-group row">
	            <label for="form-control" class="col-sm-2 col-form-label">Song Name</label>
	            <div class="col-sm-10">
	              <input type="Name" class="form-control" name="song" id="song" placeholder="Enter Name" required>
	              <div class="invalid-feedback">
	                Please provide a valid Email.
	              </div>
	            </div>
	          </div>
	          <div class="form-group row">
	            <label for="form-control" class="col-sm-2 col-form-label">Date Release</label>
	            <div class="col-sm-10">
	              <input type="date" class="form-control" name="date" id="Date" placeholder="Date" required>
	              <div class="invalid-feedback">
	                Please provide a valid Date.
	              </div>
	            </div>
	          </div>
	          <div class="form-group row">
	            <label for="form-control" class="col-sm-2 col-form-label">Your Email</label>
	            <div class="col-sm-10">
	              <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
	              <div class="invalid-feedback">
	                Please provide a valid Email.
	              </div>
	            </div>
	          </div>
	          <div class="form-group row">
	            <label for="cover" class="col-sm-2 col-form-label">Cover Photo</label>
	            <div class="col-sm-10">
	              <div class="custom-file mb-3">
	                <input type="file" class="custom-file-input" id="cover" name="cover" required>
	                <div class="invalid-feedback">
	                  Please provide a Image.
	                </div>
	                <label class="custom-file-label w-50" for="customFile" required>Choose....</label>
	              </div>
	            </div>
	          </div>
	            <div class="row no-gutters">
	            <div class="col-12 col-sm-6 col-md-8">
	              <div class="form-group row">
	                <label  class="col-sm-2 col-form-label" for="select-menu">Artist</label>
	                <div class="col-sm-10">
	                  <div class="message-show">

	                  </div>
	                  <select class="custom-select d-block form-control" id="song_table" style="margin-left:50px;width:74%;" name="artist" required>
		                    <option value="<?php echo $row["artist"]; ?>">Search</option>
	                  </select>
	                  <div class="invalid-feedback ml-5">
	                    Please selected any Artist.
	                  </div>
	                </div>
	              </div>
	            </div>

	            <div class="col-6 col-md-4">
	            <button type="button" name="add" id="add" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-info"><span style="font-size:20px;">+</span>   Add Artist</button>  
	            </div>
	          </div>
	          <br><br>

	          <div class="form-group row">
	            <div class="col-md-1" style="margin-left:300px;margin-right:46px;">
	              <button type="reset" class="btn" style="background-color: #c6d9ec;width:100px;">Cancel</button>
	            </div>
	            <div class="col-md-1">
				<button  type="submit" name="insert" value="Add Data To Database" class="btn" style="background-color: #006666;width:100px; color:white;">Save</button>
	            </div>
	          </div>
	        </form>
	      </div>
	    </div>  
	</div>

  <!--form end-->

  <!-- Pop up form start -->

	<div id="add_data_Modal" class="modal fade">  
      <div class="modal-dialog modal-dialog-centered">  
           <div class="modal-content">  
             <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Adding Artist name</h5>
               <button type="button" class="close" id="close-modal-btn" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
                </button>
              </div>  
              <div class="modal-body">  
                <form method="post" id="insert_form">
                        
                <div class="row">
                <div class="col-md-4 p-3">
                    <label style="margin-left:16px;">Artist Name</label>
                </div>
                <div class="col-md-8 p-2">
                <input type="text" name="artist" id="artist" class="form-control w-75">
                </div>
                <div class="col-md-4 p-3">
                  <label style="margin-left:16px;">Date of Birth</label>
               </div>
               <div class="col-md-8 p-2">
               <input type="date" name="dob" id="dob" class="form-control w-75">
               </div>
               <div class="col-md-4 p-3">
                <label for="" style="margin-left:16px;">Bio</label>
               </div>
               <div class="col-md-8 p-2">
                <textarea textarea type="text" name="bio" id="bio" class="form-control w-75" rows="3"></textarea>
               </div>
              </div>
              <br>
              <hr>
              <div style="margin-left:300px;"> 
                     <input type="hidden" name="song_id" id="song_id" />  
                      <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                              </div>
                            </form>  
                </div>  
           </div>  
      </div>  
 	</div>  

   <!-- Pop up form end -->


	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<script>
	  // Add the following code if you want the name of the file appear on select
	  $(".custom-file-input").on("change", function() {
	    var fileName = $(this).val().split("\\").pop();
	    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
	  });
	</script>
  
	 <script>
	    (function() {
	    'use strict';
	    window.addEventListener('load', function() {
	      var form = document.getElementById('needs-validation');
	      form.addEventListener('submit', function(event) {
	        if (form.checkValidity() === false) {
	          event.preventDefault();
	          event.stopPropagation();
	        }
	        form.classList.add('was-validated');
	      }, false);
	    }, false);
	  })();
	</script>

	<script>
		window.addEventListener('load', function() {
			fetch();
		});
	</script>

	<script>
		 $(document).ready(function(){   
		      $('#insert_form').on("submit", function(event){  
		           event.preventDefault();  
		           if($('#artist').val() == "")  
		           {  
		                alert("Artist name is required");  
		           }  
		           else if($('#dob').val() == '')  
		           {  
		                alert("Date of Birth is required");  
		           }  
		           else if($('#bio').val() == '')  
		           {  
		                alert("Bio is required");  
		           }  
		           else  
		           {
		                $.ajax({  
		                     url:"artistinsert.php",  
		                     method:"POST",  
		                     data:$('#insert_form').serialize(),  
		                     beforeSend:function(){  
		                          $('#insert').val("Inserted");  
		                     },  
		                     success:function(data){ 
		                          $('#insert_form')[0].reset();
		                          $("#close-modal-btn").click(); 
		                          $('#add_data_Modal').css("display","none");  		                          
		                          fetch();
		                          $('#insert').val("Insert");  
		                     }  
		                });  
		           }  
		      });  
		 });  
 	</script>

 	<script>
 		
 		//Fetch data from db to diplay artist name in dropdown
 		   function fetch() {   
                $.ajax({  
                     url:"fetch.php",  
                     method:"POST",  
                     data: {req: "get_records"},  
                     dataType: "json", 
                     success:function(data){ 	
                     	var arr = data.allrecords;

                     	const dropdown_select = document.getElementById("song_table");
                     	dropdown_select.innerHTML = "<option value="+">Search</option>";	

                     	for (var i = 0; i < arr.length; i++) {
                     		                     			
							var artist_id = arr[i]["id"];
							var artist_name = arr[i]["artist"];
							dropdown_select.innerHTML += "<option value="+ artist_name + ">" + artist_name + "</option>";
                     	}
                     }  
                });      
 		   }
 	</script>
</body>
</html>