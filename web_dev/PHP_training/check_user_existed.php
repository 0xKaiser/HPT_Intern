<?php

function checkUserExisted($username){

  //define connect to sqlserver
  include('connect_sqlserver.php');
  if ($checkConnected){
    
    $sql ="SELECT * from dbo.Users where username = '$username'"; 
    $query = $conn->query( $sql );

    if ( $result = $query->fetch( PDO::FETCH_ASSOC ) ){  
      return true;
    } else {
      return false;
    }
    
  }
  
}

?>