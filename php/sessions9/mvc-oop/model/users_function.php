<?php

class UsersFunction {
    
    public function selectAll($order) {
        if ( !isset($order) ) {
            $order = "name";
        }
        $dbOrder =  mysql_real_escape_string($order);
        $dbres = mysql_query("SELECT * FROM users ORDER BY $dbOrder ASC");
        
        $users = array();
        while ( ($obj = mysql_fetch_object($dbres)) != NULL ) {
            $users[] = $obj;
        }
        
        return $users;
    }
    
    public function selectById($id) {
        $dbId = mysql_real_escape_string($id);
        
        $dbres = mysql_query("SELECT * FROM users WHERE id=$dbId");
        
        return mysql_fetch_object($dbres);
		
    }
    
    public function insert( $name, $phone, $email, $address ) {
        
        $dbName = ($name != NULL)?"'".mysql_real_escape_string($name)."'":'NULL';
        $dbPhone = ($phone != NULL)?"'".mysql_real_escape_string($phone)."'":'NULL';
        $dbEmail = ($email != NULL)?"'".mysql_real_escape_string($email)."'":'NULL';
        $dbAddress = ($address != NULL)?"'".mysql_real_escape_string($address)."'":'NULL';
        
        mysql_query("INSERT INTO users (name, phone, email, address) VALUES ($dbName, $dbPhone, $dbEmail, $dbAddress)");
        return mysql_insert_id();
    }
    
    public function delete($id) {
        $dbId = mysql_real_escape_string($id);
        mysql_query("DELETE FROM users WHERE id=$dbId");
    }
    
}

?>
