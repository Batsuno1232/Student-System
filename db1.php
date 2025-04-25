<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project_db";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    //set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo"Connected successfully";


} catch (PDOException $e) {
    echo "Connection failed:".$e->getMessage();

}

//execute sql commands on this connection
// try{$cmd = "INSERT INTO student_detail (u_rollno,u_name,u_password) values('CS025013','Lora Wilson','abc123')";
// $conn->exec($cmd);
// }catch (PDOException $ee) {
//     echo $ee->getMessage();
// }
// try{
//     $cmd="INSERT INTO student_detail (u_rollno,u_name,u_password) values(:rollno,:tname,:password)";
//     $templet=$conn->prepare($cmd);
//     $templet->bindValue(":rollno","CS025012");
//     $templet->bindValue(":tname","Mando Diaz");
//     $templet->bindValue(":password","abc123");
//     $templet->execute();
// }
// catch (PDOException $e) {

// }
try{
    $cmd="SELECT * FROM student_detail";
    $templet=$conn->prepare($cmd);
    $templet->execute();
    echo ("<br>".$templet->rowCount());
    $rv=$templet->fetchAll(PDO::FETCH_ASSOC);
    print_r($rv);
    echo("<br>");
    
}
catch (PDOException $e) {

}
try{
    echo("<br>");
    echo("<br>");
    $cmd="SELECT u_name FROM student_detail where u_name like :rollno";
    $templet=$conn->prepare($cmd);
    $templet->execute([":rollno"=>"____ %"]);
    $rv=$templet->fetchAll(PDO::FETCH_ASSOC);
    var_dump($rv);
      
    
}
catch (PDOException $e) {

}
?>