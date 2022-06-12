<?php



class DBConnection{

    protected function connection(){
        try {
            $host_name = "localhost";
            $db_name = "login_data";
            $usename = "user";
            $password = "";
            $pdo = new PDO("mysql:host=$host_name;dbname=$db_name", $usename, $password);
            return $pdo;
        } catch (PDOException $e){
            echo "Error" . $e->getMessage();
        }
    }
}
