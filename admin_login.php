<?php
 
 if(isset($_POST['mobielno'])){
     $number=$_POST['mobielno'];
     $password=$_POST['password'];
     $team_name=$_POST['team'];
     
     if($team_name=="team_1"){
        if( $number== 9096541921 &&  $password=="RamAdmin@701"){
            session_start();
            $_SESSION['admin_number_team_1']=$number;
            header("location:admin_dashboard_team_1.php");
            die();
     
        }
        else{
           header("location:index.php");
        }
        
     }
     else if($team_name=="team_2"){
        if( $number== 9096541922 &&  $password=="RamAdmin@702"){
            session_start();
            $_SESSION['admin_number_team_2']=$number;
            header("location:admin_dashboard_team_2.php");
            die();
     
        }
        else{
           header("location:index.php");
        }
        
     }
     else if($team_name=="team_3"){
        if( $number== 9096541923 &&  $password=="RamAdmin@703"){
            session_start();
            $_SESSION['admin_number_team_3']=$number;
            header("location:admin_dashboard_team_3.php");
            die();
     
        }
        else{
           header("location:index.php");
        }
        
     }
     else if($team_name=="team_4"){
        if( $number== 9096541924 &&  $password=="RamAdmin@704"){
            session_start();
            $_SESSION['admin_number_team_4']=$number;
            header("location:admin_dashboard_team_4.php");
            die();
     
        }
        else{
           header("location:index.php");
        }
        
     }
     else if($team_name=="team_5"){
        if( $number== 9096541925 &&  $password=="RamAdmin@705"){
            session_start();
            $_SESSION['admin_number_team_5']=$number;
            header("location:admin_dashboard_team_5.php");
            die();
     
        }
        else{
           header("location:index.php");
        }
        
     }
     else if($team_name=="team_6"){
        if( $number== 9096541926 &&  $password=="RamAdmin@706"){
            session_start();
            $_SESSION['admin_number_team_6']=$number;
            header("location:admin_dashboard_team_6.php");
            die();
     
        }
        else{
           header("location:index.php");
        }
        
     }
     else if($team_name=="team_7"){
        if( $number== 9096541927 &&  $password=="RamAdmin@707"){
            session_start();
            $_SESSION['admin_number_team_7']=$number;
            header("location:admin_dashboard_team_7.php");
            die();
     
        }
        else{
           header("location:index.php");
        }
        
     }
     else if($team_name=="team_8"){
        if( $number== 9096541928 &&  $password=="RamAdmin@708"){
            session_start();
            $_SESSION['admin_number_team_8']=$number;
            header("location:admin_dashboard_team_8.php");
            die();
     
        }
        else{
           header("location:index.php");
        }
        
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
 background:url(images/bg2.jpeg)no-repeat;
 padding-top:80px;
 background-size:cover;
 color:;
 font-size:50px;
 }

 .loginbox{
  width:70%;
  height:45%;
  margin-top:37%;
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
  width:55%;
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
      <a href="index.php"><li><i>HOME</i></li></a>
       <a href="president_login.php"><li><i>Only For President</i></li></a>
      
     
      
      <li>chaitanya bagade<span>Web Developer</span></li>
      <a href="#"><li>contact me 9307084680</li></a>
      
    </div>
    
<div class="mainbody">
	
  <div class="loginbox">
  
    <form  class="form"method="post">
         <h2>Admin - login</h2>
         <label><b>mobiel no.:-</b></label><input id="in1"type="text"name="mobielno">
          <br><br>
          <label><b>Team No. :- </b></label>
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
          <label><b>Password :-</b></label><input id="in1" type="text"name="password">
          <br><br>
          
          <button type="submit" class="submit">submit</button>
    </form>
 </div>
	
	
    
    
</div>  
</body>
</html>
