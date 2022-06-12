<?php



class Signup extends DBConnection{

    protected function setUser($uid, $pwd, $email){
        $sql = "INSERT INTO  users(user_uid, user_pwd, user_email) VALUES (?, ?, ?);";
        $stmt = $this->connection()->prepare($sql);

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT); 

        if($stmt->execute(array($uid, $hashedPwd, $email))){
            $stmt = null;
            header("location ../index.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }


    protected function checkUser($uid, $email){
        $sql = "SELECT user_uid FROM users WHERE user_uid = ? OR user_email = ?;";
        $stmt = $this->connection()->prepare($sql);
        if($stmt->execute(array($uid, $email))){
            $stmt = null;
            header("location ../index.php?error=stmtfailed");
            exit();
        }

        $resultCheck;
        if($stmt->rowCount() > 0){
            $resultCheck = false;
        }
        else {
            $resultCheck = true;
        }
        return $resultCheck;
    }
}
