<?php
class db{
   
    function connect(){
        $DB_Host = 'localhost';
        $DB_Tyep = 'mysql';
        $DB_Name = 'doem';
        $DB_User = 'root';
        $DB_Password = '0000';
        $DB_Language = 'utf-8'; 
        $dsn = "{$DB_Tyep}:host={$DB_Host};dbname={$DB_Name};charset={$DB_Language}";
        $link = new PDO($dsn, $DB_User, $DB_Password); 
        return $link;
    }
    
    function get($table)  {  
        $link = $this->connect();
        $result = $link->query("SELECT * FORM {$table}");
        $row = $result->fetch();
        return $row;
    }
}
?>
