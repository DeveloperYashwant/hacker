<html>



<head>



<style>



#b1{



position:absolute;



bottom:32px;



right:50%;



}











</style>



<link rel="stylesheet" href="s.css">



</head>



<body background="">



<div class="header">



<h2>Student Admission Form</h2>



</div>



<img src="user.jpg" class="user"></img>



<form method="post" action="insert.php" enctype="multipart/form-data">







<div class="input-group">



<label>First Name</label>



<input type="text" name="fn" placeholder="" required="required">



</div>







<div class="input-group">



<label>Last Name</label>



<input type="text" name="ln" placeholder=""  required="required">



</div>







<div class="input-group">



<label>Contact No.</label>



<input type="number" name="cn" placeholder="" required="required">



</div>







<div class="input-group">



<label>Parents Contact No.</label>



<input type="number" name="pcn" placeholder="" required="required">



</div>







<div class="input-group">



<label>Date of Admission</label>



<input type="date" name="doa" placeholder="" required="required">



</div>







<div class="input-group">



<label>Email ID</label>



<input type="email" name="ei" placeholder="" required="required">



</div>







<div class="input-group">



<label>College Name and Stream</label>



<input type="text" name="cnas" placeholder="" required="required">



</div>















<div class="input-group">



<label>Name of Subjects</label>



<input type="text" name="nos" placeholder="" required="required">



</div>







<div class="input-group">



<label>Total Fees</label>



<input type="text" name="tf" placeholder="" required="required">



</div>







<div class="input-group">



<label>Photo</label>



<input type="file" name="uploadfile" placeholder="" required="required">



</div>







<div class="input-group">



<button type="submit" name="register" class="btn">



Submit



</button>







</div>



</form>







</body>



</html>