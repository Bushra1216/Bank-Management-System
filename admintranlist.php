<!DOCTYPE html>
<html>
<head>
  <title> </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
</head>


<body>
<nav class="navbar navbar-expand-lg navbar-red bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><h5>Trust Oxide<h5></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto ">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Home.php"><h5>Home</h5></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php"><h5>About</h5></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php"><h5>Contact</h5></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php"><h5>Logout</h5></a>
        </li>
       
       </ul>
      
    </div>
  </div>

   

</nav>

<br><br>

<h2><center>Transaction List</center></h2>

<br><br>

<div class="col-lg-12">
<table class="table table-bordered">
    <thead align="center">
      <tr>

        <th>Transaction No.</th>
        <th>Date</th>
        <th>Account No.</th> 
        <th>Debited Amount</th>
        <th>Credited Amount</th>
      </tr>
    </thead>
    <tbody align="center">
      
      <?php
       include("config.php");
       $sqlvar="select * from trantab order by tranNo desc";
       $result=$conn -> query($sqlvar);
      while($row=$result->fetch_row())
      {
      echo("<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td></tr>"); 
      }

       ?>

    </tbody>
    </table>
  

</div>



<a href="Admin_panelPage.php"><input type="submit" value="Back" style="font-size:21px; 
    width: 12%;
    background-color: #8163d3;
    color: #fff;
    padding: 6px 10px;
    margin: 8px 0;
    border: none;
    font-weight: bold;
    border-radius: 4px;
    cursor: pointer;
   margin-left: 43%;
   margin-top: 10%;"
 }
</a>








</body>
</html>


