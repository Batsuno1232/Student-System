<?php
$rootpath = $_SERVER["DOCUMENT_ROOT"];
require_once $rootpath . "/project1/DBHandler/DatabaseConnection.php";

class DBStudentDetails
{
    public function getId($u_rollno, $u_password)
    {
        //connect with the DB and return the id 
        // column from the student_detail table where the rollno and password is a match
        $id = "-1";
        $dbo = new DataCon();
        $cmd = "SELECT id FROM student_detail WHERE u_rollno=:rollno AND u_password=:password";
        $template = $dbo->conn->prepare($cmd);
        $template->execute([":rollno" => $u_rollno, ":password" => $u_password]);

        if ($template->rowCount() > 0) {
            $rtable = $template->fetchAll(PDO::FETCH_ASSOC);
            $id = $rtable[0]['id'];


        }

        return $id;

    }
}



?>