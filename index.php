<?php   
 $conn=mysqli_connect("localhost:4306","root","","deltaxx"); //database connection  
 //hostname, username, password, database name  
 if ($conn) {  
      echo "";  
 }else{  
      echo "Error";  
 }  
 //check database connect or not  
 $query="select * from song";  
 $connect=mysqli_query($conn,$query);  
 $num=mysqli_num_rows($connect); //check in database any data have or not  
 ?> 


<!DOCTYPE html>
<html>
<head>
<title>Spotify like website</title> 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
  .form-inline {
     margin-left: 1100px;;
}

td {
        height: 100px;
        vertical-align: middle !important;
       }
td{
  width:10%;
}   
label {
  font-size:25px;
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
    <form class="form-inline" method="post">
    <input class="form-control mr-2" type="search" name="search" placeholder="Search" id="datatable-search-input" aria-label="Search">
    <button class="btn btn-info" type="submit" name="submitt"  for="datatable-search-input"><i class="fa fa-search"></i></button>
  </form>
</nav>

<!-- Header section end -->

<!-- Heading section-->

<div class="container-fluid p-5 ml-5">
     <div class="row">
      <div class="col" style="font-size:25px;">
        <b>Top 10 songs</b>
      </div>
      <div class="col">
        <button type="button" class="btn btn-info" style="margin-left:460px;"><span style="font-size:20px;">+</span> <a href="newsong.php" style="text-decoration: none;color:white;">  Add Songs</a></button>
      </div>
    </div>
  </div>
  
<!-- Heading section end-->

<!-- Table section-->
  
<div class="table-responsive w-100 p-5" id="datatable"> 
  <table class="table table-bordered table-hover text-center">
    <thead class="thead-dark">
      <tr>
        <th scope="col" style="width:10%;">Cover</th>
        <th scope="col">Song</th>
        <th scope="col">Artist</th>
        <th scope="col">Date of Release</th>
        <th scope="col" style="width:60px;">Rating</th>
      </tr>
    </thead>
    <tbody>
    
    <?php   
         if ($num>0) {  
            while($data=mysqli_fetch_assoc($connect)){  
               echo "
               <tr>  
               <td><img src='{$data['cover']}' width='50%' height='auto'></td>  
               <td style='table'>".$data['song']."</td>  
               <td>".$data['artist']."</td>  
               <td>".$data['date']."</td>  
               <td><label>☆</label><label>☆</label><label>☆</label><label>☆</label><label>☆</label></td> 
               </tr> 
             ";  
            }  
         }  
     ?>  
    </tbody>
  </table>
</div>
  
<!-- table for song end --->

<!-- table for artist start --->

  <div class="container-fluid p-5 ml-5">
    <div class="row">
     <div class="col" style="font-size:25px;">
       <b>Top 10 Artist</b>
     </div>
    </div>
 </div>
  <div class="table-responsive w-100 p-5"> 
    <table class="table table-bordered table-hover text-center">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Artist</th>
          <th scope="col">Date of Birth</th>
          <th scope="col">Bio</th>
        </tr>
      </thead>
      <tbody>
      <?php   
 $query="select * from artist";  
 $connect=mysqli_query($conn,$query);  
 $num=mysqli_num_rows($connect); //check in database any data have or not  
 ?> 
    <?php   
         if ($num>0) {  
            while($data=mysqli_fetch_assoc($connect)){  
               echo "
               <tr>  
               <td>".$data['artist']."</td> 
               <td>".$data['dob']."</td>  
               <td>".$data['bio']."</td>
               </tr> 
             ";  
            }  
         }  
     ?> 
      </tbody>
    </table>
    </div>

<!-- table for artist end-->

</body>


<!-- custom js file link  -->
<script src="js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</html>
