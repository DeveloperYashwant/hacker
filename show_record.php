<?php


session_start();


?>





<?php





if(empty($_SESSION['username']))


{


session_destroy();


echo "<script>alert('You need to Login');window.location.href='index.html';</script>";


}





?>








<head>


<meta charset="utf-8">


    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">


    


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">


   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">








  <meta name="viewport" content="width=device-width, initial-scale=1">





  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">





  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>





  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>





  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>





  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	


   <script src="https://kit.fontawesome.com/a076d05399.js"></script>








<style>











body{





}





* {


  box-sizing: border-box;


}





form.example input[type=search] {


  padding: 10px;


  font-size: 17px;


  border: 1px solid grey;


  float: left;


  width: 80%;


  background: #f1f1f1;


}





form.example button {


  float: left;


  width: 20%;


  padding: 10px;


  background: #2196F3;


  color: white;


  font-size: 17px;


  border: 1px solid grey;


  border-left: none;


  cursor: pointer;


}





form.example button:hover {


  background: #0b7dda;


}





form.example::after {


  content: "";


  clear: both;


  display: table;


}





body{


    


    background:yellow;


}





input:focus{


	


	outline:none;


}





::placeholder{


	color:silver;


}





</style>





<title>Yashwant Ghole</title>


	<link rel="icon" href="images/logo.png" />





</head>





<br><br>








<?php


$conn=mysqli_connect("localhost","root","","hacker");

//$conn=mysqli_connect("localhost","root","","student");


if(!$conn)


{


echo "not connected";


}








/*


$sql="


set @autoid :=0;


update att set id= @autoid :=(@autoid+1);


alter table att Auto_increment=1;


select * from att;


";





$result=mysqli_multi_query($conn,$sql);


*/


?>


<br>





<div class="card" style="border:5px dotted #f928f3;border-radius:10px;">


    <div class="card-body">


        <h1 style="text-align:center;font-family:algerian;color:blue">Student Progress Details</h1>   


	


<a href="update_record.html" title="Update Record" target="link"><i class="fa fa-edit" style="font-size:15px;color:white;background:skyblue;padding:8px;border-radius:10px;position:absolute;right:20px;top:10px"></i></a>


	<div style="position:absolute;top:8px;width:450px;left:-60px;">


	<form action="" method="post" class="example" style="margin:auto;max-width:300px">





  <input name="search" type="search" placeholder="Search by Student Name" style="border-radius:20px;background:white;border:2px solid #56ff00;padding:8px;color:purple"><Button type="submit" name="button" style="border-radius:10px;background:none;border:none;position:relative;color:#56ff00;right:53px;top:5px;font-size:20px"><i class="fa fa-search"></i></Button>





</form></div>





    </div>


</div>











<br>


<?php


if(isset($_POST['button'])){    //trigger button click





  $search=$_POST['search'];





$result=mysqli_query($conn,"select * from record where name like '%{$search}%'");


?>








<div class="card">


  <div class="card-body">


  <table class="table table-hover table-bordered table-dark">


  <thead>


    <tr align="center">


      <th scope="col">Enroll No.</th>


      <th scope="col">Student Name</th>


      <th scope="col">Course Name</th>


      <th scope="col">Topic Name</th>


      <th scope="col">Branch Location</th>


      <th scope="col">Date</th>


      <th scope="col">Progress</th>


      


        <th scope="col">Action</th>   


      


    </tr>


  </thead>


  


<?php





$i=1;





while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))


{








$idn=$row['id'];


$fnn=$row['name'];


$lnn=$row['course'];


$cnn=$row['topic'];


$br=$row['branch'];


$ema=$row['dt'];


$pcnn=$row['progress'];





?>





<tbody>


    <tr align="center">


      


<td><?php echo $i; ?></td>


<td><?php echo $fnn; ?></td>


<td><?php echo $lnn; ?></td>


<td><?php echo $cnn; ?></td>


<td><?php echo $br; ?></td>


<td><?php echo $ema; ?></td>


<td><?php echo $pcnn; ?></td>


    


<td>


<a href="delete_record.php?delete=<?php echo $idn; ?>" class="btn btn-primary" onclick="return confirm('Are you sure to delete this record?');"><span class="glyphicon glyphicon-trash"></span></a>


</td> 


    </tr>


  


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


<?php


 $i++;


 }


}


else{


    $result=mysqli_query($conn,"select * from record");


?>








<div class="card">


  <div class="card-body">


  <table class="table table-hover table-bordered table-dark">


  <thead>


    <tr align="center">


      <th scope="col">Enroll No.</th>


	  <th scope="col">Student Name</th>


      <th scope="col">Course Name</th>


      <th scope="col">Topic Name</th>


      <th scope="col">Branch Location</th>


      <th scope="col">Date</th>


      <th scope="col">Progress</th>


      <th scope="col">Action</th>


      


     


     


    </tr>


  </thead>


  


<?php





$i=1;





while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))


{





$idn=$row['id'];


$fnn=$row['name'];


$lnn=$row['course'];


$cnn=$row['topic'];


$br=$row['branch'];


$ema=$row['dt'];


$pcnn=$row['progress'];


?>





<tbody>


    <tr align="center">


      <td><?php echo $i; ?></td>


      <td><?php echo $fnn; ?></td>


<td><?php echo $lnn; ?></td>


<td><?php echo $cnn; ?></td>


<td><?php echo $br; ?></td>


<td><?php echo $ema; ?></td>


<td><?php echo $pcnn; ?></td>


    


<td>





<a href="delete_record.php?delete=<?php echo $idn; ?>" class="btn btn-primary" onclick="return confirm('Are you sure to delete this record?');"><span class="glyphicon glyphicon-trash"></span></a>


</td> 


    </tr>


  


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


<?php


 $i++;


 }


}





?>