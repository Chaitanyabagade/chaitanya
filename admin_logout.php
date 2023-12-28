<?php
     session_start();

     if(isset($_SESSION['admin_number_team_1'])){    
      
      session_unset();
      session_destroy();
      
     
    }
     if(isset($_SESSION['admin_number_team_2'])){    
      
      session_unset();
      session_destroy();
      
     
    }
    
     if(isset($_SESSION['admin_number_team_3'])){    
      
      session_unset();
      session_destroy();
      
     
    }
     if(isset($_SESSION['admin_number_team_4'])){    
      
      session_unset();
      session_destroy();
      
     
    }
    if(isset($_SESSION['admin_number_team_5'])){    
      
      session_unset();
      session_destroy();
      
     
    }
     if(isset($_SESSION['admin_number_team_6'])){    
      
      session_unset();
      session_destroy();
      
     
    }
    
     if(isset($_SESSION['admin_number_team_7'])){    
      
      session_unset();
      session_destroy();
      
     
    }
     if(isset($_SESSION['admin_number_team_8'])){    
      
      session_unset();
      session_destroy();
      
     
    }
    
    
       header("location:index.php");
  
     ?>