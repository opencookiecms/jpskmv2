<?php
//Include database configuration file
include('../Connections/fecthmysqls.php');

if(isset($_POST["usersId"]) && !empty($_POST["usersId"])){
    //Get all state data
  $d=$_POST["usersId"];
  $h=$_GET["usersEmail"];
  $query = $db->query("SELECT * FROM `users` WHERE usersId=$d");

    //Count total number of rows
    $rowCount = $query->num_rows;

    //Display states list
    if($rowCount > 0){
      //  echo '<option value="">Select state</option>';
        while($row = $query->fetch_assoc()){
            echo '<option value="'.$row['usersEmail'].'">'.$row['usersEmail'].'</option>';
            //echo '<input type="text" value"'.$row['usersTel']'">';
        }
    }
    else
    {
      if ($row['usersEmail']==0000000000) {
            echo '<option value="">Tiada No Telefon</option>';
      }

    }
}

?>
