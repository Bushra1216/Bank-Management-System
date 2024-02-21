<?php

include ("config.php") ;
session_start();
$res="";
 //echo(date('Y/m/d'));
 if($_SERVER['REQUEST_METHOD']=='POST')
 {
  //echo("working");
  $v1=$_POST['text1'];
   $v2=$_POST['text2'];
    $v3=$_POST['text3'];
     //echo $v2." ".$v2;

    $nvar=1001;
    $sqlvar="select max(tranno) + 1 from trantab";
     $result=$conn->query($sqlvar);
     if($row=$result->fetch_row())
    {
      $nvar=$row[0];
    }

    if($nvar===null){$nvar=1001;}
    //echo($nvar);
    $d1=date('Y/m/d');

    $sqlvar="INSERT into trantab values($nvar,'$d1',$v1,$v2,0,'$v3')";
     $result=$conn->query($sqlvar);
     if($result)
    {
      $res="Record Inserted";
    }
    else{
     $res="Record can not insert,Some problem";
    }

 }


?> 








 






<!DOCTYPE html>
<html>
<head>
  <title>Deposit Entry</title>
  <link rel="stylesheet" href="details.css">
</head>
<body>


  <div class="wrapper">
    <div class="title">
      Deposit Entry
    </div>
    <div class="form">
        <form action="admindeposit.php" method="POST">
            
            <div class="inputfield">
          <label>AcNo</label>
          <input type="text" name="text1"  class="input">
       </div> 
       <br><br> 
        <div class="inputfield">
          <label>Amount</label>
          <input type="text"  name="text2" class="input">
       </div> 
       <br><br> 
       <div class="inputfield">
          <label>AcDetails</label>
          <input type="text"  name="text3" class="input">
       </div>  
    

        <div class="inputfield terms">
          <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>&nbsp;
          &nbsp;
          <br>
           &nbsp;
           &nbsp;
           <br>
           <br>
          <p>Mark as done</p>
       </div> &nbsp;

   
   
              
                    </div>
        <div class="d-flex justify-content-center">
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="Admin_panelPage.php"><b>Back</b></a><input type="submit" value="Submit" style="background-color:#cb2400;">
    &nbsp;

    <?php echo $res;?>
      </div>
    </form>
   
</div>

</body>
</html>