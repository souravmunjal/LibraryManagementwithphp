<!doctype>
<html>
<head>
  <link rel="stylesheet" href="style4.css">
</head>
<body>
  <a href="index.html" class="headlink"><h1 class="heading1">Library Management</h1></a>
  <hr>
<div class="btn-group">
<a href="home.html"><button id="homehead">Home</button></a>
<a href="issue.php"><button id="issue">Issue a Book</button></a>
 <a href="student.php"><button>Students</button></a>
<a href="about.html"><button id="about">About</button></a>
  <div class="dropdown">
  <a href="allbooks.php"><button class="dropbtn">List of books</button></a>
  <div class="dropdown-content">
 
  </div>
</div>
</div>

<br><br><br><br>
<div class="home">
<form action="" method="POST">
<pre>Name-       <input type="text" name="Name" required><br><br></pre>
<pre>Email-      <input type="email" name="Email" required><br><br></pre>
<pre>BookIssued- <input type="text" name="Bissue" required><br><br></pre>
<pre>Phoneno-    <input type="number" name="phone" required><br><br></pre>
<input type="submit" name="Submit">
</form>
</div>
</body>
<?php
$conn=mysqli_connect("localhost","root","","books");
$sss="donesfsdfjsdlfjsldfkjsdlfkjslkdfjsldf";

if(isset($_POST['Submit']))
{
	$name=$_POST['Name'];
	$email=$_POST['Email'];
	$Bissue=$_POST['Bissue'];
	$Phoneno=$_POST['phone'];
	$Issued="Issued";
	
$update="UPDATE `allbooks` SET `Status`='$Issued' WHERE `BName`='$Bissue'";
$result=mysqli_query($conn,$update);
echo mysqli_affected_rows($conn);
if(mysqli_affected_rows($conn)!=0){
	$sqlss="INSERT INTO `issuedbooks`( `Name`, `Email`, `BookIssued`, `Phoneno`) VALUES ('$name','$email','$Bissue',$Phoneno)";
	mysqli_query($conn,$sqlss);
	echo "<script>alert('Data inserted')</script>";
}
else
{
	echo "<script>alert('No book of such name')</script>";
}
	
}
?>
</html>
