<?php

if(@$_POST['fetch'])
{
	$s=@$_POST['sid'];

$conn=mysqli_connect("localhost","root","","hacker");

	$query="select * from details where id=$s";
	
$run=mysqli_query($conn,$query);

while($row=mysqli_fetch_array($run,MYSQLI_ASSOC))
{

$id=$row['id'];
$fn=$row['fn'];
$ln=$row['ln'];
$cn=$row['cn'];
$ei=$row['ei'];


}
	
}


?>

<head>

<style>

.c1{



height:460px;

width:400px;

position:absolute;

left:30%;

box-shadow:0px 0px 5px 5px grey;

top:80px;

border-radius:20px;

background:white;

}



.c2{

border:1px solid orange;

height:60px;

width:380px;

position:absolute;

right:10px;

top:10px;

background:orange;

border-radius:10px;

}



.c3{

border:1px solid skyblue;

height:360px;

width:380px;

position:absolute;

right:10px;

top:85px;

background:skyblue;

border-radius:10px;

}



.c4{

color:white;

font-size:30px;

position:absolute;

right:140px; 

top:10px;

}



.c5{

position:absolute;

left:20px;

color:blue;

top:10px;

color:;

}



table{

color:yellow;

font-size:19px;

font-style:bold;



}



input,textarea{

border:1px solid white;

padding:3px;

color:black;

border-radius:5px;

outline:none;



}





input[type=submit],input[type=reset]{

border:1px solid grey;

background:grey;

color:white;

padding:5px;

cursor:pointer;

font-weight:bold;

}



input[type=submit]:hover,input[type=reset]:hover{

border:1px solid black;

background:black;

color:white;

padding:5px;

cursor:pointer;

font-weight:bold;

}



img{

position:absolute;

right:50%;

top:25px;

border-radius:50%;

border:1px solid lightblue;

}



body{

background:lightyellow;

}



</style>

</head>





</div>

<div class="c1">

<div class="c2">

<div class="c4"><b>Fees Receipt</b></div>

</div>

<div class="c3">

<div class="c5">

<form action="next.php" method="post">

<table border="1" align="center" cellspacing="4" cellpadding="6" bordercolor="white">

<tr><td>Student ID</td><td></td></tr>

<tr><td>First Name</td><td><input type="text" value="<?php echo @$fn; ?>" name="fn" required></td></tr>

<tr><td>Last Name</td><td><input type="text"  value="<?php echo @$ln; ?>" name="ln"  required></td></tr>

<tr><td>Contact No</td><td><input type="text"  value="<?php echo @$cn; ?>" name="cn"  required></td></tr>

<tr><td>Email ID</td><td><input type="text"  value="<?php echo @$ei; ?>" name="em"  required></td></tr>

<tr><td>Date of Fees</td><td><input type="date" name="dof"  required></td></tr>

<tr><td>Paid Amount</td><td><input type="text" placeholder="Enter Current Paid Amount" name="pa"  required></td></tr>







<tr align="center"><td><input type="submit" value="Save"></td>
<td></td></tr>


</table>

</form>

<form method="post">
<input type="text" name="sid" placeholder="Enter Admission ID"  value="<?php echo @$id; ?>" style="position:absolute;top:11;left:41%" required>
<tr><td><input type="submit" name="fetch" value="Search" style="position:absolute;top:303px;left:50%"></td></tr>
</form>


</div>

</div>

</div>











