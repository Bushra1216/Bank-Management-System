<?php

include ("config.php") ;
session_start();
$res="";

 if($_SERVER['REQUEST_METHOD']=='POST')
 {
  //echo("working");
  $v1=$_POST['text1'];
   $v2=$_POST['text2'];
    $v3=$_POST['text3'];
     $v4=$_POST['text4'];
     //echo $v2." ".$v2;

     $sqlvar="INSERT into actypetab values('$v1','$v2','$v3',$v4)";
     $result=$conn->query($sqlvar);
     if($result)
    {
      $res="Record inserted";
    }else{
     $res="Record can not insert,Some problem";
    }

 }


?> 








 






<!DOCTYPE html>
<html>
<head>
  <title>Account type</title>
  <link rel="stylesheet" href="det.css">
</head>
<body>


  <div class="wrapper">
    <div class="title">
      Account Type Entry
    </div>
    <div class="form">
        <form action=" " method="POST">
            
            <div class="inputfield">
          <label>Account Name</label>
          <input type="text" name="text1"  class="input">
       </div> 
       <br><br> 
        <div class="inputfield">
          <label>Account Details</label>
          <input type="text"  name="text2" class="input">
       </div> 
       <br><br> 
       <div class="inputfield">
          <label>Facilities</label>
          <input type="text"  name="text3" class="input">
       </div>  
       <br><br>
      <div class="inputfield">
          <label>Minimum Balance</label>
          <input type="text" name="text4" class="input">
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
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../Pacific/Admin_Panel/Admin_panelPage.php"><b>Back</b></a><input type="submit" value="Submit" style="background-color:#c22b7c;">
    &nbsp;
     <br>
    <?php echo $res;?>
      </div>
    </form>
   
</div>

</body>
</html>