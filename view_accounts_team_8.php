<?php
  session_start();
   
   if(isset($_SESSION['admin_number_team_8'])){
          
          

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
}
h2{
  text-align:center;
  color:orange;
}








table{
   
   background:white;
   border:2px solid black;
   font-size:30px;
   width:auto;
   margin-top:5%;
   overflow-x:scroll;
   margin-left:auto%;
   
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
        <li style="background:orange"> Team No. 8</li>
      <a href="admin_dashboard_team_8.php"><li><i>HOME</i></li></a>
      <li> Hi Mr.------</li>
      <a href="admin_logout.php"><li> Logout </li></a>
      <a href="view_accounts_team_8.php"><li style="background:greenyellow"> View Accounts</li></a>
       <a href="view_intrest_team_8.php"><li> View Intrest </li></a>
      <a href="view_penalty_team_8.php"><li> View Penalty</li></a>
       <a href="view_deposite_team_8.php"><li>View Deposite</li></a>
       <a href="view_r_loan_team_8.php"><li>view r. loan</li></a>
      <a href="view_emi_loan_team_8.php"><li> view emi loan </li></a>
      <a href="add_deposite_team_8.php"><li>Add Deposite</li></a>
      <a href="add_intrest_team_8.php"><li> Add Intrest </li></a>
      <a href="add_penalty_team_8.php"><li> Add Penalty </li></a>
      <a href="add_r_loan_team_8.php"><li> Add R.Loan </li></a>
      <a href="add_emi_loan_team_8.php"><li> Add EMI Loan </li></a>
  <!--
      <a href=""><li> Team1 </li></a>
      <a href=""><li> Team1 </li></a> -->
     
     
      
      <li>chaitanya bagade<span style="color:black;">Web Developer</span></li>
      <a href="#"><li >contact me 9307084680</li></a>
      
</div>

<div class="mainpage">
    <br><br><br><br>
    <h2> All Accounts in Team 8 </h2>
    <?php
     include 'database.php';
      $conn=mysqli_connect($server,$username,$password);

                
                $sqll= "SELECT * FROM `$database_name`.`team_8_accounts`";
                $result= mysqli_query($conn,$sqll);
                $count=1;
                
                 echo "
                  <table>
                     <tr>
                        <th>Sr.No.</th>
                        <th>Name</th>
                        <th>Mobile No.</th>
                    
                  <tr>";
                
                 while($row = mysqli_fetch_assoc($result)){
                      
                           echo "<tr><td>$count</td><td style='width:50%'>".$row['name']."</td><td>".$row['mobile_no']."</td></tr>";
                       
                       $count=$count+1;
                 }  
                  echo "</table>";
            
            
    
    ?>
    
 
</div>
</body>
</html>