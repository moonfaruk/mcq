<?php
class Auth_model extends CI_Model{
    
    
    public function checklogin($username, $password)
    {
         if(!empty ($username) && !empty($password)){
           
            $this->db->where('username', $username);
            $this->db->where('password', md5($password));
            $this->db->where('status', '1');
            $this->db->from('users');
            $query = $this->db->get();
            
            if($query->num_rows() > 0){

				 
               return  $query->row();

            }else{
                return NULL;
            }


        }
        else{
            return NULL;
        }
    }
}