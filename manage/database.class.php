<?php
class Database {
 
       private $host = 'localhost'; //ชื่อ Host 
       private $user = 'root'; //ชื่อผู้ใช้งาน ฐานข้อมูล
       private $password = ''; // password สำหรับเข้าจัดการฐานข้อมูล
       private $database = 'manage_information'; //ชื่อ ฐานข้อมูล
 
    //function เชื่อมต่อฐานข้อมูล
    protected function connect(){
        
        $mysqli = new mysqli($this->host,$this->user,$this->password,$this->database);
            
            $mysqli->set_charset("utf8");
 
            if ($mysqli->connect_error) {
 
                die('Connect Error: ' . $mysqli->connect_error);
            }
 
        return $mysqli;
    }
    
    //function เรื่ยกดูข้อมูล all user
    public function get_all_user(){
        
        $db = $this->connect();
        $get_user = $db->query("SELECT * FROM student");
        
        while($user = $get_user->fetch_assoc()){
            $result[] = $user;
        }
        
        if(!empty($result)){
            
            return $result;
        }
    }
    
    public function search_user($post = null){
        
        $db = $this->connect();
        $get_user = $db->query("SELECT * FROM student WHERE name_stu  LIKE '%".$post."%' ");//ค้นหาสามารถเปลี่ยนได้จะค้นหาไร
        
        while($user = $get_user->fetch_assoc()){
            $result[] = $user;
        }
        
        if(!empty($result)){
            
            return $result;
        }
        
    }
    
  
    
   
?>