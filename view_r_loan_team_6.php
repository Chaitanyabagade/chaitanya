<?php
  session_start();
   
   if(isset($_SESSION['admin_number_team_6'])){
          
          

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
    
    
		<title>View Accounts</title>
		<link rel="stylesheet" href="styles/commoncss.css">
        <link rel="stylesheet" href="styles/index.css">
			
<style>    
.mainpage{
    margin:0px;
    padding:0px;
    width:100%;
    height:100%;
    background:url(images/bg2.jpeg) no-repeat;
    background-size:cover;
    overflow-x:scroll;
    overflow-y:scroll;
    
}
h2{
  text-align:center;
  color:black;
}








table{
   
   background:white;
   border:2px solid black;
   font-size:30px;
   width:auto;
   margin-top:5%;
   overflow-x:scroll;
   margin-left:0%;
   
}
td{

   border:2px solid black;
   font-size:60px;
   text-align:center;
   overflow-x:scroll;

}
th{
  font-size:50px;
  border:2px solid black;overflow-x:scroll;
}
tr{
  
  border:2px solid black;
  overflow-x:scroll;
}

li{
    text-decoration:none;
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
        <li style="background:orange"> Team No. 6 </li>
      <a href="admin_dashboard_team_6.php"><li><i>HOME</i></li></a>
      <li> Hi Mr.------</li>
      <a href="admin_logout.php"><li> Logout </li></a>
      <a href="view_accounts_team_6.php"><li> View Accounts</li></a>
      <a href="view_intrest_team_6.php"><li> View Intrest </li></a>
      <a href="view_penalty_team_6.php"><li> View Penalty</li></a>
       <a href="view_deposite_team_6.php"><li>View Deposite</li></a>
       <a href="view_r_loan_team_6.php"><li  style="background:greenyellow">view r. loan</li></a>
      <a href="view_emi_loan_team_6.php"><li> view emi loan </li></a>
      <a href="add_deposite_team_6.php"><li>Add Deposite</li></a>
      <a href="add_intrest_team_6.php"><li> Add Intrest </li></a>
      <a href="add_penalty_team_6.php"><li> Add Penalty </li></a>
      <a href="add_r_loan_team_6.php"><li> Add R.Loan </li></a>
      <a href="add_emi_loan_team_6.php"><li> Add EMI Loan </li></a>
  <!--
      <a href=""><li> Team1 </li></a>
      <a href=""><li> Team1 </li></a> -->
     
     
      
      <li>chaitanya bagade<span style="color:black;">Web Developer</span></li>
      <a href="#"><li >contact me 9307084680</li></a>
      
</div>

<div class="mainpage">
    <br><br><br><br>
    <h2> All R. Loan Of Team 6 </h2>
 <?php
     include 'database.php';
      $conn=mysqli_connect($server,$username,$password);
     
                
            $sql1= "SELECT * FROM `$database_name`.`team_6_accounts`";
            $result1= mysqli_query($conn,$sql1);
              
                $total_r_loan=0;
                while($row1 = mysqli_fetch_assoc($result1)){   
                    
                     $number= $row1['mobile_no'];
                     $sql2= "SELECT * FROM `$database_name`.`team_6_r_loan` where `mobile_no`= $number";
                     $result2= mysqli_query($conn,$sql2);
               
                     
                
                     $count=1;
               echo' <br>';
                echo"<h2>".$row1['name']."</h2>";
                 echo"<table>
               <tr>
                  <th style='width:20%'>Sr.No.</th>
                   <th style='width:20%'>Amount</th>
                   <th style='width:50%'> Date</th>
                   <th style='width:50%'>R.Date</th>
                    
                  <tr>";
                    
                 
                      while($row2 = mysqli_fetch_assoc($result2)){
                           echo '<tr><td>'.$count.' </td><td>'.$row2['r_loan_amt'].'</td><td>'.$row2['date']. '</td> <td>'.$row2['return_date']. '</td></tr>'; 
                          $total_r_loan=$total_r_loan + $row2['r_loan_amt'];
                          $count=$count+1;
                          
                      }
                          echo "</table>";
              
                }  
               
              
            
            
                   echo"<br><br><h2 style='color:orange'>Total R. Loan => ".$total_r_loan." </h2>";
                      
    ?>
    
 
</div>
</body>
</html>