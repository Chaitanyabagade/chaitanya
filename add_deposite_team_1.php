<?php
  session_start();
   
   if(isset($_SESSION['admin_number_team_1'])){
          
          

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
body{
     background:url(images/bg3.jpg) no-repeat;
    background-size:cover;
}
.mainpage{
    margin:0px;
    padding:0px;
    width:100%;
    height:100%;
   
    overflow-x:scroll;
    overflow-y:scroll;
    
    
}

.loginbox{
  width:70%;
  height:55%;
  margin-top:40%;
  margin-left:14%;
  border:2px solid black;
  border-radius :5%;
 
  background:linear-gradient(orange,blue);
}
h2{
  text-align:center;
  font-family:bold;
  font-size:60px;
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
  margin-left:50px;
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
  margin-left:80px;
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
        <li style="background:orange"> Team No. 1 </li>
      <a href="admin_dashboard_team_1.php"><li><i>HOME</i></li></a>
      <li> Hi Mr.------</li>
      <a href="admin_logout.php"><li> Logout </li></a>
      <a href="view_accounts_team_1.php"><li> View Accounts</li></a>
      <a href="view_intrest_team_1.php"><li> View Intrest </li></a>
      <a href="view_penalty_team_1.php"><li> View Penalty</li></a>
       <a href="view_deposite_team_1.php"><li>View Deposite</li></a>
       <a href="view_r_loan_team_1.php"><li>view r. loan</li></a>
      <a href="view_emi_loan_team_1.php"><li> view emi loan </li></a>
      <a href="add_deposite_team_1.php"><li   style="background:greenyellow">Add Deposite</li></a>
      <a href="add_intrest_team_1.php"><li> Add Intrest </li></a>
      <a href="add_penalty_team_1.php"><li> Add Penalty </li></a>
      <a href="add_r_loan_team_1.php"><li> Add R.Loan </li></a>
      <a href="add_emi_loan_team_1.php"><li> Add EMI Loan </li></a>
  <!--
      <a href=""><li> Team1 </li></a>
      <a href=""><li> Team1 </li></a> -->
     
     
      
      <li>chaitanya bagade<span style="color:black;">Web Developer</span></li>
      <a href="#"><li >contact me 9307084680</li></a>
      
</div>
     

<div class="mainbody">
	
  <div class="loginbox">
    <form class="form" method="post">
        <br></br>
         <h2>Add Deposite</h2>
         <br><br><br><br>
         <label><b>Name :-</b></label>
         <?php
         
         
     include 'database.php';  
     if(isset($_POST['number'])){
          
         
             $conn=mysqli_connect($server,$username,$password);

            
            
            
             $number=$_POST['number'];
             $amount=$_POST['amount'];
             $date=$_POST['date'];
            
            
          
                    $sql="INSERT INTO `$database_name`.`team_1_deposite` (`mobile_no`, `deposite_amt`,`date`) VALUES ('$number','$amount','$date')";
                    $conn ->query($sql);
                    $conn ->close();
             if(isset($_POST['number'])){  
                 echo'<meta http-equiv="refresh" content="0;url=add_deposite_team_1.php">';
             }
        }
      $conn=mysqli_connect($server,$username,$password);

                
                $sqll= "SELECT * FROM `$database_name`.`team_1_accounts`";
                $result= mysqli_query($conn,$sqll);
                $count=1;
                
                
                echo'<select name="number" type="number" id="in1">';
                 while($row = mysqli_fetch_assoc($result)){
                      echo'<option value='.$row['mobile_no'].'>'.$count.') '.$row['name'].'</option>';
                       $count=$count+1;
                 }  
                echo'</select>'; 
         
    
    ?><br><br><br><br>
          <label><b>Amount :-</b></label><input id="in2"type="number"name="amount">
           <br><br><br><br>
          <label><b>Date :-</b></label><input id="in3"type="text"name="date">
          <br><br><br><br>
          <button type="submit" class="submit">submit</button>
           <br><br><br><br>
        
    </form>
 </div>    
 

</body>
</html>