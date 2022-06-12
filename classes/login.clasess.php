<?php



class Login extends DBConnection{

    protected function getUser($uid, $pwd){
        $sql = "SELECT user_pwd FROM users WHERE user_uid = ? OR user_email = ?;";
        $stmt = $this->connection()->prepare($sql);

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT); 

        if($stmt->execute(array($uid, $hashedPwd))){
            $stmt = null;
            header("location ../index.php?error=stmtfailed");
            exit();
        }

        if($stmt->rowCount() == 0){
            $stmt = null;
            header("location: ../ndex.php?error=susernotfound");
            exit();
        }

        $stmt = null;
    }


}
