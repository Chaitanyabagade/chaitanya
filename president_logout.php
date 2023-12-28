<?php
     session_start();

     if(isset($_SESSION['president_number'])){    
      
      session_unset();
      session_destroy();
      
     
    }
    
       header("location:index.php");
  
     ?>