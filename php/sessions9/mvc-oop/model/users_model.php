<?php

require_once 'model/users_function.php';
require_once 'model/validation_exception.php';


class UsersModel {
    
    private $usersFunction    = NULL;
    
    private function openDb() {
        if (!mysql_connect("localhost", "root", "none")) {
            throw new Exception("Connection to the database server failed!");
        }
        if (!mysql_select_db("mvc_oop")) {
            throw new Exception("No mvc_oop database found on database server.");
        }
    }
    
    private function closeDb() {
        mysql_close();
    }
  
    public function __construct() {
        $this->usersFunction = new UsersFunction();
    }
    
    public function getAllUsers($order) {
        try {
            $this->openDb();

            $res = $this->usersFunction->selectAll($order);
            
            $this->closeDb();
            return $res;
        } catch (Exception $e) {
            $this->closeDb();
            throw $e;
        }
    }
    
    public function getUser($id) {
        try {
            $this->openDb();
            $res = $this->usersFunction->selectById($id);
            $this->closeDb();
            return $res;
        } catch (Exception $e) {
            $this->closeDb();
            throw $e;
        }
        return $this->usersFunction->find($id);
    }
    
    private function validateUserParams( $name, $phone, $email, $address ) {
        $errors = array();
        if ( !isset($name) || empty($name) ) {
            $errors[] = 'Name is required';
        }
        if ( !isset($phone) || empty($phone) ) {
            $errors[] = 'Phone is required';
        }
        if ( !isset($email) || empty($email) ) {
            $errors[] = 'Email is required';
        }
        if ( empty($errors) ) {
            return;
        }
        throw new ValidationException($errors);
    }
    
    public function createNewUser( $name, $phone, $email, $address ) {
        try {
            $this->openDb();
            $this->validateUserParams($name, $phone, $email, $address);
            $res = $this->usersFunction->insert($name, $phone, $email, $address);
            $this->closeDb();
            return $res;
        } catch (Exception $e) {
            $this->closeDb();
            throw $e;
        }
    }
    
    public function deleteUser( $id ) {
        try {
            $this->openDb();
            $res = $this->usersFunction->delete($id);
            $this->closeDb();
        } catch (Exception $e) {
            $this->closeDb();
            throw $e;
        }
    }
    
    
}

?>
