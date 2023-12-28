<?php

 if(isset($_POST['mobielno'])){
     $number=$_POST['mobielno'];
     $password=$_POST['password'];
     if( $number== 9096541922 &&  $password=="RamAdmin@700"){
            session_start();
            $_SESSION['president_number']=$number;
            header("location:president_dashboard.php");
            die();
          
     }
     else{
           header("location:index.php");
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
  height:36%;
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
         <h2>President - login</h2>
         <label><b>mobiel no.:-</b></label><input id="in1"type="text"name="mobielno">
          <br><br>
          <label><b>Password :-</b></label><input id="in3" type="text"name="password">
          <br><br>
          
          <button type="submit" class="submit">submit</button>
    </form>
 </div>
	
	
    
    
</div>  
</body>
</html>
