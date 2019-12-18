<?php
  include ('../Connections/dbconn.php');

  $sql = mysql_query("SELECT * FROM users WHERE usersId='".$_GET["uid"]."'");
  if(mysql_num_rows($sql)){
    $data = array();
    while ($row=mysql_fetch_array($sql)) {
      $data[] = array(
        'usersId' => $row['usersId'],
        'usersTel' => $row['usersTel']
      );
    }
    header('Content-type: application/json');
    echo json_encode($data);
  }
 ?>
