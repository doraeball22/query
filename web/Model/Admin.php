<?php
    class Admin
    {

        public function verifyAdmin($id, $pass){
                include("ConnectDatabase.php");
                $sqlVerify = "SELECT `username`, `password`, `firstname`, `lastname`, `email` FROM `administrator` WHERE `username`='$id' AND `password`='$pass'";
                $result = $conn->query($sqlVerify);
                $admin = $result->fetch_assoc();
                $conn->close();
                return $admin;

        }

        public function editAdmin($username, $firstname, $lastname, $email){
                include("ConnectDatabase.php");
                $sqlEdit = "UPDATE `administrator` SET `firstname` = '$firstname', `lastname` = '$lastname', `email` = '$email' WHERE `administrator`.`username` = '$username';";
                $result = $conn->query($sqlEdit);
                $conn->close();
        }

        public function editUsername($username, $newusername){
                include("ConnectDatabase.php");
                $sqlEdit = "UPDATE `administrator` SET `username` = '$newusername' WHERE `administrator`.`username` = '$username';";
                $result = $conn->query($sqlEdit);
                $conn->close();
        }

        public function editPass($username, $newpass){
                include("ConnectDatabase.php");
                $sqlEdit = "UPDATE `administrator` SET `password` = '$newpass' WHERE `administrator`.`username` = '$username';";
                $result = $conn->query($sqlEdit);
                $conn->close();
        }
    }

?>