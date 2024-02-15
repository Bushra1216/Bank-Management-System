<!DOCTYPE html>
<html>
<head>
  <title> </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
</head>


<body style="background-color:#d4ffea;" >
<nav class="navbar navbar-expand-lg  bg-dark bg-gradient ">
  <div class="container-fluid">
    
       <img src="logo3.jpeg" style="height: 90px;
    width: 120px;padding-left:-3px;
     border-radius:90%;"> <h1 style="color:azure";> &nbsp;Trust Oxide</h1>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto ">
        <li class="nav-item"  style="color:#27f7d7;">
          <a class="nav-link active" aria-current="page" href="Home.php"><h5 style="color:#27f7d7; font-size: 23px;">Home</h5></a>
        </li>
        <li class="nav-item" >
          <a class="nav-link" href="index.php"><h5 style="color:#27f7d7;  font-size: 23px;">About</h5></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php"><h5 style="color:#27f7d7;  font-size: 23px;">Services</h5></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php"><h5 style="color:#27f7d7;  font-size: 23px;">Review</h5></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php"><h5 style="color:#27f7d7;  font-size: 23px;">Contact us</h5></a>
        </li>
       
       
       </ul>
      
    </div>
  </div>

   

</nav>

<br><br>

<h2><center>For signing up please choose an account type you want to create!</center></h2>

<br>
<br>

<div class="col-lg-12">
<table class="table table-bordered" style="
    height: 5%;  border: 3px solid #49056b;">
    <thead align="center" style=" border: 3px solid #49056b;">
      <tr>

        <th style="color:#ba6180; font-size:21px;  border: 3px solid #49056b; background-color: #fef0fb">Account Name</th>
        <th style="color:#ba6180; font-size:21px;  border: 3px solid #49056b; background-color: #fef0fb">Account Details</th>
        <th style="color:#ba6180; font-size:21px;  border: 3px solid #49056b; background-color: #fef0fb">Facilities</th> 
        <th style="color:#ba6180; font-size:21px;  border: 3px solid #49056b; background-color: #fef0fb">Minimum Balance</th>
      </tr>
    </thead>
    <tbody align="center" style="background-color: #fef0fb;  border: 3px solid #49056b;">
      <?php
      include("config.php");
       $sqlvar="select * from actypetab order by actypeName";
       $result=$conn -> query($sqlvar);
      while($row=$result->fetch_row())
      {
      echo("<tr><td><a href= custsignup.php?actype=$row[0]>$row[0]</a></td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td></tr>"); 
      }

       ?>

    </tbody>
    </table>
   


</div>


  <div class="pic">
<br><br><br>
<img src="images/image3.svg" class="image" alt="" style="height:20%; width: 18%; margin-left: 100px;" />
 <p style="margin-left:102px; font-size:20px;">Already have an account? <a href="bankCustomer_login.html"><b>Login<b></a></p>

 


 <a href="index.php"><input type="submit" value="Back" style="font-size:21px; 
    width: 12%;
    background-color: #537f5b;
    color: #fff;
    padding: 6px 10px;
    margin: 8px 0;
    border: none;
    font-weight: bold;
    border-radius: 4px;
    cursor: pointer;
   margin-left: 41%;
   margin-top: 5%;"
 }
</a>

</div>

</body>
</html>


