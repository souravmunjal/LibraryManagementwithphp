<!doctype>
<html>
<head>
  <link rel="stylesheet" href="style5.css">
</head>
<body>
  <a href="index.html" class="headlink"><h1 class="heading1">Library Management</h1></a>
  <hr>
<div class="btn-group">
<a href="home.html"><button id="homehead">Home</button></a>
<a href="issue.php"><button id="issue">Issue a Book</button></a>
  <a href="student.php"> <button>Students</button></a>
<a href="about.html"><button id="about">About</button></a>
  <div class="dropdown">
  <a href="allbooks.php" name="allbooks"><button class="dropbtn">List of books</button></a>
  <div class="dropdown-content">

  </div>
</div>
</div>
<br><br><br><br><br><br><br><br>

<div class="tab">
<table border=1  style="background:black;">

<tr>
<th style="font-size:30px;color:white;width:4%;">Book_ID</th>
<th style="font-size:30px;color:white;width:20%;">Book_Name</th>
<th style="font-size:30px;color:white;width:20%;">Book_Writer</th>
<th style="font-size:30px;color:white;width:20%;">Cost</th>
<th style="font-size:30px;color:white;width:20%;">Status</th>
</tr>
<?php
$conn=mysqli_connect("localhost","root","","books");
$fetch="SELECT * FROM `allbooks`";
$fetchresult=mysqli_query($conn,$fetch);
while($row=mysqli_fetch_array($fetchresult))
{
?>
<tr>
<td style="font-size:20px;color:white;"><?php echo $row['Book_Id']?></td>
<td style="font-size:20px;color:white;"><?php echo $row['BName']?></td>
<td style="font-size:20px;color:white;"><?php echo $row['WName']?></td>
<td style="font-size:20px;color:white;"><?php echo $row['Cost']?></td>
<td style="font-size:20px;color:white;"><?php echo $row['Status']?></td>

</tr>
<?php } ?>
</table>
</div>
<div class="home">
<form action="" method="POST">
<pre>Name of Book-       <input type="text" name="Name" required></pre><pre>Name of Writer-     <input type="text" name="Wname" required></pre><pre>Cost-               <input type="number" name="cost" required></pre>


<input style="font-size:20px;color:black;" type="submit" name="Submit" value="Add Book">
</form>
</div>

</body>
<?php
if(isset($_POST['Submit']))
{
	$Name=$_POST['Name'];
	$WName=$_POST['Wname'];
	$cost=$_POST['cost'];
	$NotIssued="NotIssued";
$insert="INSERT INTO `allbooks`(  `BName`, `WName`, `Cost`, `Status`) VALUES ('$Name','$WName','$cost','$NotIssued')";
$result=mysqli_query($conn,$insert);
if($result){
	echo "<script>alert('Data inserted')</script>";
	echo "<script> window.open('allbooks.php','_self')</script>";
}
else
{
	alert("Data not inserted");
}
	
}
?>
</html>
