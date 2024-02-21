<?php

include ("config.php") ;
session_start();
$res="";

 if($_SERVER['REQUEST_METHOD']=='POST')
 {
  //echo("working");
 
   $v1=$_POST['text1'];
    $v2=$_POST['text2'];
     $date = date('Y-m-d H:i:s'); // Get the current date and time

     $sqlvar="INSERT INTO `comment`(name, review, date) values('$v1','$v2', NOW())"; // Insert the date and time
    $result=$conn-> query($sqlvar);
     //echo($sqlvar);
   
  
    if($result)
    {
        $res="Successfully posted";
    }
    else
    {
        $res="Sorry! Can not post.. ";
    }
}

?> 




<!DOCTYPE html>
<html>
<head>
  <title>Transfer Money</title>
  <link rel="stylesheet" href="cmntDesign.css">
</head>
<body>


  <div class="wrapper">
    <div class="title">
      Make A Review
    </div>
    <div class="form">
        <form action="comment.php" method="POST">
            
           
       <br><br> 
        <div class="inputfield">
          <label>Name</label>
          <input type="text"  name="text1" placeholder="Your name" class="input">
       </div> 
       <br><br> 
       <div class="inputfield">
          <label>Comment</label>
          <input type="text"  name="text2"   placeholder="Describe your experience..."     class="input">
       </div>  
    

        &nbsp;

      <br><br>
   
              
                    </div>
        <div class="d-flex justify-content-center">
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="customerpage.php"><b style="color:#537f5b; font-size: 19px;">Back</b></a><input type="submit" value="Post" style="font-size:20px;">
    &nbsp;

    <?php echo $res;?>
      </div>
    </form>
   
</div>

</body>
</html>