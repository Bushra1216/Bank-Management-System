<?php

include 'config.php' ;
session_start();
$res="";

 if($_SERVER['REQUEST_METHOD']=='POST')
 {
  $v1=$POST['text1'];
   $v2=$POST['text2'];
    $v3=$POST['text3'];
     $v4=$POST['text4'];

     $sqlvar="INSERT into actypeTab values('$v1','$v2','$v3',$v4";
     $result=$conn->query($sqlvar);
     if($result)
    {
      $res="record inserted";
    }else{
     $res="record can not insert";
    }

 }


?> 








 






<!DOCTYPE html>
<html>
<head>
  <title>Account type</title>

  <link rel="stylesheet" href="details.css">
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
          <label>facilities</label>
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
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Submit">
    &nbsp;

    <?php echo $res;?>
      </div>
    </form>
   
</div>

</body>
</html>  