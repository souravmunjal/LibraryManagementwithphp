<html>
<head>
  <link rel="stylesheet" href="style6.css">
</head>
<body>
  <a href="#" class="headlink"><h1 class="heading1">Library Management</h1></a>
  <hr>

<div class="btn-group">
<a href="home.html"><button id="home">Home</button></a>

<a href="issue.php"><button id="issue">Issue a Book</button></a>   <a href="student.php" ><button id="student">Students</button></a>
<a href="about.html"><button >About</button></a>
  <div class="dropdown">
  <a href="allbooks.php"><button class="dropbtn">List of books</button></a>
  <div class="dropdown-content">
    
  </div>
</div>
</div>
<br><br><br><br>
<div  >
<table border=1 style="background:black;">
<tr>
<th style="font-size:30px;color:white;width:30%;">Name</th>
<th style="font-size:30px;color:white;width:30%;">Email</th>
<th style="font-size:30px;color:white;width:30%;">BookIssued</th>
<th style="font-size:30px;color:white;width:30%;">Phoneno.</th>
</tr>

<?php
$conn=mysqli_connect("localhost","root","","books");
$fetch="SELECT * FROM `issuedbooks` ";
$fetchresults=mysqli_query($conn,$fetch);
while($row=mysqli_fetch_array($fetchresults))
{
?>
<tr>
<td style="font-size:20px;color:white;width:30%;"><?php echo $row['Name'];?></td>
<td style="font-size:20px;color:white;width:30%;"><?php echo $row['Email']?></td>
<td style="font-size:20px;color:white;width:30%;"><?php echo $row['BookIssued']?></td>
<td style="font-size:20px;color:white;width:30%;"><?php echo $row['Phoneno']?></td>
</tr>
<?php } ?>
</table>
</div>
</body>
</html>