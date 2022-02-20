
<?php
session_start();
$login = (isset($_POST['login']))?$_POST['login']:"";
$pass =(isset($_POST['pass']))?$_POST['pass']:"";

if (($login == "admin")&&($pass=="admin")){
$_SESSION['isloged']= "true";
header('Location:pointagescarlgr.html');
}

else{
header('location:index.html');
}
?>


