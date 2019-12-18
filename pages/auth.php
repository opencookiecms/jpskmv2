<?php
require '../Connections/dataconnenction.php';

session_start();

$username = "";
$password = "";

if(isset($_POST['userName'])){
  $username = $_POST['userName'];
}
if (isset($_POST['usersPassword'])) {
  $password = $_POST['usersPassword'];

}


$q = 'SELECT * FROM users WHERE userName=:username AND usersPassword=:password';

$query = $DB_con->prepare($q);

$query->execute(array(':username' => $username, ':password' => $password));


if($query->rowCount() == 0){
  header('Location: homepage?err=1');
}else{

  $row = $query->fetch(PDO::FETCH_ASSOC);

  session_regenerate_id();
  $_SESSION['sess_user_id'] = $row['usersId'];
  $_SESSION['sess_username'] = $row['userName'];
  $_SESSION['sess_userFirstName']=$row['userFname'];
  $_SESSION['sess_userLastNames']=$row['userLastname'];
  $_SESSION['sess_userrole'] = $row['userRole'];

  echo $_SESSION['sess_userrole'];
  session_write_close();

  //if( $_SESSION['sess_userrole'] == "superuser"){
  // header('Location: ../adminpanel/adminpanel.php');
  //}else{
  //header('Location: index.php');
  //}

  $banyakrole = $row['userRole'];

  switch ($banyakrole) {
    case "superuser":
    header('Location: ../adminpanel/adminpanel');
    break;
    case "adminaduan":
    header('Location: ../upanel/user_panel');
    break;
    case "specialuser":
    header('Location: ../upanel/user_panel');
    break;
    case "user":
    header('Location: ../upanel/user_panel');
    break;
    case "adminpengesyor":
    header('Location: ../upanel/user_panel');
    break;
    case "adminkontraktor":
    header('Location: ../upanel/user_panel');
    break;
    case "adminkursus":
    header('Location: ../kursus/index.php');
    break;

    default:
    header('Location: login.php');
    break;
  }



}


?>
