

<head>



<style>

input{

border:1px solid white;

padding:3px;

color:black;

border-radius:5px;

}





input[type=submit]{

border:1px solid skyblue;

background:skyblue;

color:white;

padding:5px;

cursor:pointer;

font-weight:bold;

}



input[type=submit]:hover

{

border:1px solid pink;

background:pink;

color:white;

padding:5px;

cursor:pointer;

font-weight:bold;

}



table{

border:1px solid #ece8ec;

border-radius:20px;

background:#b1a6a6;;

}



th{

color:yellow;

font-size:16px;

font-family:algerian;

}



td{

color:white;

font-size:14px;

font-weight:bold;

}



body{

background:lightyellow;

}

</style>

</head>



<?php


$conn=mysqli_connect("localhost","root","","hacker");

if(!$conn)

{

echo "not connected";

}



$result=mysqli_query($conn,"select * from private");

?>



<table border="3" cellspacing="5" height="" width="100%">

<tr>

<th>No.</th>

<th>Full Name</th>

<th>Contact No.</th>

<th>Enroll Course</th>

<th>Education Year</th>

<th>Enroll Date</th>



<th>Action</th>

</tr>;

<?php



$i=1;



while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))

{





$idn=$row['id'];

$fnn=$row['name'];

$lnn=$row['contact'];

$cnn=$row['course'];

$pcnn=$row['year'];

$dcnn=$row['dt'];





?>

<tr align="center">

<td><?php echo $i; ?></td>

<td><?php echo $fnn; ?></td>

<td><?php echo $lnn; ?></td>

<td><?php echo $cnn; ?></td>

<td><?php echo $pcnn; ?></td>

<td><?php echo $dcnn; ?></td>



<td><a href="del2.php?delete=<?php echo $idn; ?>" style='color:white;text-decoration:none;' onclick="return confirm('Are you sure you want to delete this Record?');">Trash</a>

</td>

</tr>



<?php

 $i++;

 }

?>