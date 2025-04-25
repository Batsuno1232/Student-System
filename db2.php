<?php 
$rootpath=$_SERVER["DOCUMENT_ROOT"];
require_once $rootpath."/project1/DBHandler/DatabaseConnection.php";

$dbo=new DataCon();


try{
    echo("<br>");
    echo("<br>");
    $cmd="SELECT u_name FROM student_detail where u_name like :rollno";
    $templet=($dbo->conn)->prepare($cmd);
    $templet->execute([":rollno"=>"____ %"]);
    $rv=$templet->fetchAll(PDO::FETCH_ASSOC);
    var_dump($rv);
      
    
}
catch (PDOException $e) {

}

?>