









<head>

<meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

body{

background:lightyellow;

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



</style>

</head>




<div class="card" style="border:5px dotted #f928f3;border-radius:10px;">
    <div class="card-body">
        <h1 style="text-align:center;font-family:algerian;color:blue">Student Fees Report</h1>   
	

	<div style="position:absolute;top:8px;width:450px;left:-60px;">
	<form action="" method="post" class="example" style="margin:auto;max-width:300px">

  <input name="search" type="search" placeholder="Search by Name" style="border-radius:20px;background:white;border:2px solid #56ff00;padding:8px;color:purple;outline:none"><Button type="submit" name="button" style="border-radius:10px;background:none;border:none;position:relative;color:#56ff00;right:53px;top:5px;font-size:20px;outline:none;"><i class="fa fa-search"></i></Button>
<br>
</form></div>


<?php


$conn=mysqli_connect("localhost","root","","hacker");


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

if(isset($_POST['button'])){    //trigger button click



  $search=$_POST['search'];



$result=mysqli_query($conn,"select * from att where fn like '%{$search}%' || ln like '%{$search}%'");

?>





<div class="card">

  <div class="card-body">

  <table class="table table-hover table-bordered table-dark">

  <thead>

    <tr align="center">

      <th scope="col">ID</th>

      <th scope="col">First Name</th>

      <th scope="col">Last Name</th>

      <th scope="col">Contact No.</th>

      <th scope="col">Email ID</th>

      <th scope="col">Date of Fees</th>

      <th scope="col">Paid Amount</th>



      <th scope="col">Balance Amount</th>

     

      <th scope="col">Action</th>

    </tr>

  </thead>

  

<?php



$i=1;



while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))

{





$idn=$row['id'];

$fnn=$row['fn'];

$lnn=$row['ln'];

$cnn=$row['cn'];

$ema=$row['email'];

$pcnn=$row['dof'];

$doan=$row['pa'];

//$tpan=$row['tpa'];

$ba=$row['ba'];



?>



<tbody>

    <tr align="center">

      <th scope="row"><?php echo $i; ?></th>

      

<td><?php echo $fnn; ?></td>

<td><?php echo $lnn; ?></td>

<td><?php echo $cnn; ?></td>

<td><?php echo $ema; ?></td>

<td><?php echo $pcnn; ?></td>

<td><?php echo $doan; ?></td>



<td><?php echo $ba; ?></td>



<td><a href="editr.php?edit=<?php echo $idn; ?>" class="btn btn-info"><span class="glyphicon glyphicon-edit"></span></a>



<a href="receipt.php?recep=<?php echo $idn; ?>" class="btn btn-warning" onclick="return confirm('Are you sure?');"><span class="glyphicon glyphicon-print"></span></a>



<a href="delete.php?delete=<?php echo $idn; ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this record?');"><span class="glyphicon glyphicon-trash"></span></a>

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

    $result=mysqli_query($conn,"select * from att");

?>





<div class="card">

  <div class="card-body">

  <table class="table table-hover table-bordered table-dark">

  <thead>

    <tr align="center">

      <th scope="col">ID</th>

      <th scope="col">First Name</th>

      <th scope="col">Last Name</th>

      <th scope="col">Contact No.</th>

      <th scope="col">Email ID</th>

      <th scope="col">Date of Fees</th>

      <th scope="col">Paid Amount</th>

    

      <th scope="col">Balance Amount</th>

     

      <th scope="col">Action</th>

    </tr>

  </thead>

  

<?php



$i=1;



while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))

{





$idn=$row['id'];

$fnn=$row['fn'];

$lnn=$row['ln'];

$cnn=$row['cn'];

$ema=$row['email'];

$pcnn=$row['dof'];

$doan=$row['pa'];

//$tpan=$row['tpa'];

$ba=$row['ba'];



?>



<tbody>

    <tr align="center">

      <th scope="row"><?php echo $i; ?></th>

      

<td><?php echo $fnn; ?></td>

<td><?php echo $lnn; ?></td>

<td><?php echo $cnn; ?></td>

<td><?php echo $ema; ?></td>

<td><?php echo $pcnn; ?></td>

<td><?php echo $doan; ?></td>



<td><?php echo $ba; ?></td>



<td><a href="editr.php?edit=<?php echo $idn; ?>" class="btn btn-info"><span class="glyphicon glyphicon-edit"></span></a>



<a href="receipt.php?recep=<?php echo $idn; ?>" class="btn btn-warning" onclick="return confirm('Are you sure?');"><span class="glyphicon glyphicon-print"></span></a>



<a href="delete.php?delete=<?php echo $idn; ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this record?');"><span class="glyphicon glyphicon-trash"></span></a>

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



