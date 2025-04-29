<?php 
$rootpath=$_SERVER["DOCUMENT_ROOT"];
require_once $rootpath."/project1/DBHandler/DBStudentDetails.php";

$dbo=new DBStudentDetails();

$rv=$dbo->getId("","");
echo($rv);
?>