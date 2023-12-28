<?php
  session_start();
   
   if(isset($_SESSION['admin_number_team_2'])){
          
          

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
         <li style="background:orange"> Team No. 2 </li>
      <a href="admin_dashboard_team_2.php"><li><i>HOME</i></li></a>
      <li> Hi Mr.------</li>
      <a href="admin_logout.php"><li> Logout </li></a>
       <a href="view_accounts_team_2.php"><li> View Accounts</li></a>
      <a href="view_intrest_team_2.php"><li> View Intrest </li></a>
      <a href="view_penalty_team_2.php"><li> View Penalty</li></a>
       <a href="view_deposite_team_2.php"><li>View Deposite</li></a>
       <a href="view_r_loan_team_2.php"><li>view r. loan</li></a>
      <a href="view_emi_loan_team_2.php"><li> view emi loan </li></a>
      <a href="add_deposite_team_2.php"><li>Add Deposite</li></a>
      <a href="add_intrest_team_2.php"><li> Add Intrest </li></a>
      <a href="add_penalty_team_2.php"><li> Add Penalty </li></a>
      <a href="add_r_loan_team_2.php"><li> Add R.Loan </li></a>
      <a href="add_emi_loan_team_2.php"><li> Add EMI Loan </li></a>
     
    <!--  <a href=""><li> Team1 </li></a>
      <a href=""><li> Team1 </li></a>
      <a href=""><li> Team1 </li></a> -->
     
     
      
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