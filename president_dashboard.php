<?php
  session_start();
   
   if(isset($_SESSION['president_number'])){
          
          

    }
    else{
        header("location:index.php");
    }
  
           
    
   ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    
		<title>Home Page</title>
		<link rel="stylesheet" href="styles/commoncss.css">
        <link rel="stylesheet" href="styles/index.css">
			
<style>    

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
      <a href=""><li> Team1 </li></a>
      <a href=""><li> Team1 </li></a>
      <a href=""><li> Team1 </li></a>
     
     
      
      <li>chaitanya bagade<span style="color:black;">Web Developer</span></li>
      <a href="#"><li >contact me 9307084680</li></a>
      
</div>

<div class="mainpage">
    <div class="mainpageupper">
           <br>
           <h2 style="text-align: center;" class="welcome">WELCOME TO OUR SJH TEAM</h2>
           <div class="info1">
            Growth with all Team
           </div>
          </div>
       
    <div class="mainpagedown">
        <br><br>
        
            <div class="president1">
              <div class="photo1"></div><p style="width:70%;margin-left:5%;background:white;text-align:center;font-size:30px;margin-top:15px">FATHER OF SJH</p>
             </div>
             <div class="president2">
                <div class="photo2"></div><p style="background:white;text-align:center;font-size:30px;margin-top:15px">PRESIDENT MR. RAM BAGADE</p>
             </div>
    
    
    
       
    </div>
</div>
</body>
</html>