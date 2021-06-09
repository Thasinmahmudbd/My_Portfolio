<?php

// Class containing functions regarding database.
class Database{
    
    private $host_name;
    private $user_name;
    private $password;
    private $database_name;
    
    // Connection to database.
    public function connect(){
        
        $this->host_name = "localhost";
        $this->user_name = "root";
        $this->password = "";
        $this->database_name = "personal_portfolio";
        
        $connection = mysqli_connect($this->host_name, $this->user_name, $this->password, $this->database_name);
        
        if($connection == false){
            mysqli_connect_error();
            die("We have a problem! Check CRUD_dynamic.");
        }
        else{
            return $connection;
        }
        
    } // Connect function end.
    
    
    // insert in database.
    public function create($query){
        
        $con = $this->connect();
        $result = mysqli_query($con, $query);
            
            if(!$result){
                return false;
            }
            else{
                return true;
            }
               
    }
    
    // Read from database.
    public function read($query){
        
        $con = $this->connect();
        //$data = false;
        $result =mysqli_query($con, $query);
            
            if(!$result){
                return false;
            }
            else{
                /*while($row = mysqli_fetch_assoc($result)){
                    $data[] = $row;
                    return $data;
                }*/
                return $result;
            }
        
    }
    
    // update the database.
    public function update($query){
        
        $con = $this->connect();
        //$data = false;
        $result =mysqli_query($con, $query);
            
            if(!$result){
                return false;
            }
            else{
                return true;
            }
        
    }
    
    // delete from database.
    public function delete($query){
        
        $con = $this->connect();
        //$data = false;
        $result =mysqli_query($con, $query);
            
            if(!$result){
                return false;
            }
            else{
                return true;
            }
        
    }
    
    
    
    
    
    
    
}

?>