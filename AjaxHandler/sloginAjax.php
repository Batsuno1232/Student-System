<?php
$rootpath=$_SERVER["DOCUMENT_ROOT"];
require_once $rootpath."/project1/DBHandler/DBStudentDetails.php";
$dbo=new DBStudentDetails();

$action=$_POST["action"];

if($action== "loginHandler"){
    //uName:trimUN,uPWD:trimpwd,action:"loginHandler"
    $un=$_POST["uName"];
    $pwd=$_POST["uPWD"];
    $status="";
    $id=$dbo->getId($un,$pwd);

    if($id == -1){
        $status= "ERROR";
        session_start();
        session_destroy();
    }else{
        session_start();
        $_SESSION["studentid"]=$id;
        $status= "OK";
    }
    $rv=array("status"=>$status);
    echo json_encode($rv);
    exit;
}

if($action=="otherHandler"){

}
?>