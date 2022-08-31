<?php
include"database.class.php";
 
//create object
$process = new Database();
 
    //Add_user
    if(isset($_POST['send_id_p'])){
        //รับข้อมูลจาก FORM ส่งไปที่ Method add_user
        $process->add_user($_POST);
    }
    
    //show edit data form
    if(isset($_POST['show_user_id'])){
        
        $edit_user = $process->get_user($_POST['show_user_id']);
 
        echo'<form id="edit_user_form">
              
              <div class="form-group">
                <label >date_j</label>
                <input type="date" class="form-control" name="edit_date_j" value="'.$edit_user['date_j'].'">
              </div>

              <input type="hidden" name="edit_user_id_j" value="'.$edit_user['id_j'].'" >
            </form>';
    }
    
    //edit user 
    if(isset($_POST['edit_user_id_j'])){
        
        $process->edit_user($_POST);
        
    }
    
    //delete user
    if(isset($_POST['delete_user_id'])){
        
        $process->delete_user($_POST['delete_user_id']);
    }
    
 
?>