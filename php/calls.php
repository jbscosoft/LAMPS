[9/17/2016 3:54:33 PM] Seremba John Paul: <-- Connect.php-->
[9/17/2016 3:54:34 PM] Seremba John Paul: <?php
error_reporting(E_ALL ^ E_NOTICE);


function GetCon(){
 return mysqli_connect("localhost","root", "","kissem_db");
 }

?>
[9/17/2016 3:55:08 PM] Seremba John Paul: <-- Calls.php-->
[9/17/2016 3:55:08 PM] Seremba John Paul:  <?php
include "functions.php";

if (isset($_REQUEST['sign'])){
$signing = $_REQUEST['sign'];

 switch($signing){
  case "home":
  Home();
  break;
  
  case "about":
  Home();
  break;

  case "downloads":
  Downloads();
  break;

  case "contact":
  Contact();
  break;
  
  case "register":
  Register();
  break;

  case "admin":
  Login();
  break;
    
  default:
  Home();
  break;
  }
}
else if (isset($_REQUEST['gallery'])){
 echo"<META HTTP-EQUIV='Refresh' CONTENT='0; URL=gallery/'>";
 }
else{
 Home();
 }
