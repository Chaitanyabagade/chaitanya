<?php

  session_start();
   
   if(isset($_SESSION['president_number'])){
          
          

    }
    else{
        header("location:index.php");
    }
  
           
    
   ?>
<?php
   include 'database.php';
     $count=3;
         if(isset($_POST['username'])){
             $server="localhost";
             $username="id21696666_rambagade";
             $password="Chaitanya@700";
        
             $conn=mysqli_connect($server,$username,$password);

             $username=$_POST['username'];
             $team=$_POST['team'];
            
             $teamName=$team."_accounts";
             $mobile_no=$_POST['mobile_no'];
             $pass=$_POST['password'];
            
             
    
           $sql= "SELECT * FROM `$database_name`.`$teamName`";
           $result= mysqli_query($conn,$sql);
            while($row = mysqli_fetch_assoc($result)){   
           
               if($row['mobile_no']==$mobile_no){
                    $count=1;
                    break;
               }
             
            }
             if($count==3){
                   $sql="INSERT INTO `$database_name`.`$teamName` (`name`, `mobile_no`,`password`) VALUES ('$username',' $mobile_no','$pass')";
                    $conn ->query($sql);
                    $conn ->close();
                    $count=0;
                    header("location:Sign_Up.php"); 
             }
           

     
             
  
  
  
    }

  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    
	<meta charset="UTF-8">
		<title>my webpage</title>
			<link rel="stylesheet" href="styles/commoncss.css">
			
<style>    
@import url('https://fonts.googleapis.com/css?family=Varela+Round');
.mainbody{
	width:100%;
	height:100%;
background:url(images/bg1.jpg)no-repeat;
padding-top:80px;
background-size:cover;
font-size:50px;
}

.loginbox{
  width:70%;
  height:55%;
  margin-top:40%;
  margin-left:14%;
  border:2px solid black;
  border-radius :5%;
 
  background:linear-gradient(rgba(231, 90, 90, 0.5),rgba(125, 255, 125, 0.5));
}
h2{
  text-align:center;
  font-family:bold;
}
label{
  margin-left:10px;
  font-size:50px;
  font-family:bold;
}
#in1{
  width:54%;
  height:80px;
  font-size:50px;
  margin-left:10px;
  border-radius: 5%;
}
#in2{
  width:54%;
  height:80px;
  font-size:50px;
  margin-left:10px;
  border-radius: 5%;
}
#in3{
  width:54%;
  height:80px;
  font-size:50px;
  margin-left:25px;
  border-radius: 5%;
}
.submit{
   width:25%;
   height:80px;
   font-size:50px;
   border:2px solid blue;
   border-radius:20%;
   margin-left:39%;
}


.success{
    margin-top:5%;
    font-family:bold;
  text-align:center;
  color:green;
  background:white;
  font-family:bold;
}
.fail{
      margin-top:5%;
  font-family:bold;
  text-align:center;
  color:red;
  background:white;
  font-family:bold;
}








</style>

</head>
<body>
	<div class="header"><div class="logo"></div></div>
  <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
  <label for="openSidebarMenu" class="sidebarIconToggle">
    <div class="spinner diagonal part-1"></div>
    <div class="spinner horizontal"></div>
    <div class="spinner diagonal part-2"></div>
  
</label>
 
  <div id="sidebarMenu">
    <ul class="sidebarMenuInner">
      <a href="president_dashboard.php"><li><i>HOME</i></li></a>
      <li> Hi Mr. Ram Bagade</li>
      <a href="president_logout.php"><li> Logout </li></a>
       <a href="Sign_Up.php"><li> Sign Up</li></a>
      <a href=""><li> Team 1 </li></a>
      <a href=""><li> Team 2 </li></a>
      <a href=""><li> Team 3 </li></a>
       <a href=""><li>Team 4 </li></a>
     
     
      
      <li>chaitanya bagade<span style="color:black;">Web Developer</span></li>
      <a href="#"><li >contact me 9307084680</li></a>
      
    </div>
    
<div class="mainbody">
	
  <div class="loginbox">
    <form class="form" method="post">
         <h2>Sign Up</h2>
         <label><b>User Name:-</b></label><input id="in1"type="text"name="username">
          <br><br>
         <label><b>Mobiel No.:-</b></label><input id="in2"type="text"name="mobile_no">
          <br><br>
         <label><b>Team No .:-</b></label>
            <select name="team" id="in1">
                  <option value="team_1">Team 1</option>
                  <option value="team_2">Team 2</option>
                  <option value="team_3">Team 3</option>
                  <option value="team_4">Team 4</option>
                  <option value="team_5">Team 5</option>
                  <option value="team_6">Team 6</option>
                  <option value="team_7">Team 7</option>
                  <option value="team_8">Team 8</option>
              </select><br><br>
          <label><b>Password :-</b></label><input id="in1"type="password"name="password">
          <br><br>
          <button type="submit" class="submit">submit</button>
          <?php
               if($count==0){
                   echo "<div class='success'>account create succesfull</div>";
               }
               if($count==1){
                   echo "<div class='fail'> account already exits </div>";
               }
               
          ?>
    </form>
 </div>
	
	
    
    
</div>  
</body>
</html>