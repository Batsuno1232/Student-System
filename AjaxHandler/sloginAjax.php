<?php

$action=$_POST["action"];

if($action== "loginHandler"){
    $un=$_POST["uName"];
    $pwd=$_POST["uPWD"];
    $status="";
    if($un== "abc123"&& $pwd== "123abc"){
        $status= "OK";
    }else{
        $status= "ERROR";
    }
    $rv=array("status"=>$status);
    echo json_encode($rv);
    exit;
}

if($action=="otherHandler"){

}
?>