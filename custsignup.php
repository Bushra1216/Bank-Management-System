<?php

include ("config.php") ;
session_start();
$res="";

 if($_SERVER['REQUEST_METHOD']=='POST')
 {
  //echo("working");
  $v1=$_POST['text1'];
   $v2=$_POST['text2'];
    $v3=$_POST['text4'];
     $v4=$_POST['text5'];
     $v5=$_POST['text6'];
     $v6=$_POST['text7'];

     $v7=$_SESSION['actype'];
     //echo $v7." ".$v7;

     $sqlvar="INSERT into custactab values($v1,'$v2','$v3','$v4',$v5,'$v6','$v7','N')";
     //echo($sqlvar);
     $result=$conn-> query($sqlvar);
     if($result)
    {
      $res="Record inserted";
    }
    else{
     $res="Record can not insert,Some problem";
    }

 }
 else
 {

  $_SESSION['actype']=$_GET['actype'];
 }


?> 








 <!DOCTYPE html>
<html>
<head>
  <title>Customer signup</title>
  <link rel="stylesheet" href="gf.css">
</head>
<body>


  <div class="wrapper">
    <div class="title">
      Customer Signup
    </div>
    <div class="form">
        <form action="custsignup.php" method="POST">
            
            <div class="inputfield">
          <label>Account No (10digit)</label>
          <input type="text" name="text1"  class="input">
       </div> 
       <br><br> 
        <div class="inputfield">
          <label>Password</label>
          <input type=password  name="text2" class="input">
       </div> 
       <br><br> 
        <div class="inputfield">
          <label> Retyp Password</label>
          <input type=password  name="text3" class="input">
       </div> 
       <br><br> 
       <div class="inputfield">
          <label>Person Name</label>
          <input type="text"  name="text4" class="input">
       </div>  
       <br><br> 
        <div class="inputfield">
          <label>Address</label>
          <textarea name="text5" rows="4"></textarea>
       </div> 
       <br><br>
      <div class="inputfield">
          <label>MobileNo</label>
          <input type="text" name="text6" class="input">
       </div> 
       <br><br> 
        <div class="inputfield">
          <label>eMail</label>
          <input type="text"  name="text7" class="input">
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
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="custacdetlist.php"><b>Back</b></a><input type="submit" value="Submit">
    &nbsp;

    <?php echo $res;?>
      </div>
    </form>
   
</div>

</body>
</html>