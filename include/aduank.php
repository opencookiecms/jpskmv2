<?php
    session_start();
    $userFname = $_SESSION['sess_userFirstName'];

    $role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION['sess_userFirstName']) || $role!="adminaduan" && $role!="superuser"){
      header('Location: ../pages/login.php?err=2');
    }

?>
<?php include('../Connections/fecthmysql.php'); ?>
<?php
require_once('../Connections/dbconn.php');
require('../PHPMailer/PHPMailerAutoload.php');


?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "")
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "")
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formaduan")) {
  $insertSQL = sprintf("INSERT INTO aduan (aNama, aNokp, aAlamat, aTel, aTarikh, aTerima, aJawatan, aSalinan, aSumber, aMasalah, aKampung, aMukim, aSungai, aDaerah, aStatus, aKod, adKepada, ppp, AduandateSuratMin) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['apengadu'], "text"),
                       GetSQLValueString($_POST['nokp'], "int"),
                       GetSQLValueString($_POST['alamat'], "text"),
                       GetSQLValueString($_POST['notel'], "int"),
                       GetSQLValueString($_POST['atarikh'], "date"),
                       GetSQLValueString($_POST['atarikhterima'], "date"),
                       GetSQLValueString($_POST['ajawatan'], "text"),
                       GetSQLValueString($_POST['asalinan'], "text"),
                       GetSQLValueString($_POST['asumber'], "text"),
                       GetSQLValueString($_POST['amasalah'], "text"),
                       GetSQLValueString($_POST['akampung'], "text"),
                       GetSQLValueString($_POST['amukim'], "text"),
                       GetSQLValueString($_POST['asungai'], "text"),
                       GetSQLValueString($_POST['adaerah'], "text"),
                       GetSQLValueString($_POST['astatus'], "text"),
                       GetSQLValueString($_POST['akodaduan'], "text"),
					             GetSQLValueString($_POST['aFor'], "text"),
                       GetSQLValueString($_POST['ppp'], "text"),
                       GetSQLValueString($_POST['suratminit'], "text"));



  mysql_select_db($database_dbconn, $dbconn);
  $Result1 = mysql_query($insertSQL, $dbconn) or die(mysql_error());
////////////////////////////////////////////////////////////////////////////////////////////////////////
//phpmailer//

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output
$maduan = $_POST['amasalah'];
$emailaduan = $_POST['ppp'];
$aduanNo = $_POST['akodaduan'];
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp-mail.outlook.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'jpskmsb@outlook.my';                 // SMTP username
$mail->Password = 'bskmjps12';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('jpskmsb@outlook.my', 'Mailer');
$mail->addAddress("$emailaduan", 'Joe User');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = "Aduan No $aduanNo";
$mail->Body    = "$maduan this is ";
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////
  $insertGoTo = "aduan";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

mysql_select_db($database_dbconn, $dbconn);
$query_aduanview = "SELECT * FROM aduan";
$aduanview = mysql_query($query_aduanview, $dbconn) or die(mysql_error());
$row_aduanview = mysql_fetch_assoc($aduanview);
$totalRows_aduanview = mysql_num_rows($aduanview);

mysql_select_db($database_dbconn, $dbconn);
$query_collectuser = "SELECT * FROM users";
$collectuser = mysql_query($query_collectuser, $dbconn) or die(mysql_error());
$row_collectuser = mysql_fetch_assoc($collectuser);
$totalRows_collectuser = mysql_num_rows($collectuser);
?>

<?php
//Include database configuration file
include('../Connections/fecthmysqls.php');

//Get all country data
$query = $db->query("SELECT * FROM users WHERE userRole = 'user' ");

//Count total number of rows
$rowCount = $query->num_rows;
?>
