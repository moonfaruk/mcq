<?php
class Common_model extends CI_Model{

    public function update($table_name, $data, $id){
        $this->db->where($id);
        $this->db->update($table_name, $data);
    }

    public function test_insert($data){
        $this->db->insert('expense_entry', $data);
    }

    public function delete($table_name, $id){
        $this->db->where($id);
        $this->db->delete($table_name);
    }

    public function change_status_unpublished($table_name, $id){
        $this->db->set('status', 0);
        $this->db->where($id);
        $this->db->update($table_name);
    }
    public function change_status_published($table_name, $id){
        $this->db->set('status', 1);
        $this->db->where($id);
        $this->db->update($table_name);
    }

    public function selectAll($table_name, $order = NULL){
    	$this->db->select('*');
        $this->db->where('status !=', 0);

        if (!($order == NULL)) {
            $this->db->order_by($order);
        }

    	$this->db->from($table_name);

    	$query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }

    public function selectAllWhere($table_name, $id, $order = NULL){
        $this->db->select('*');

        if (!($order == NULL)) {
            $this->db->order_by($order);
        }
        $this->db->where($id);
        $this->db->from($table_name);

        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }

    public function get_account_name($bank_name, $account_id){
        $this->db->select("*");
        $this->db->where($account_id);
        $this->db->from($bank_name);

        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }

    public function selectAllStatus($table_name, $order = NULL){
        $this->db->select('*');

        if (!($order == NULL)) {
            $this->db->order_by($order);
        }

        $this->db->from($table_name);
        $this->db->where('status', 1);

        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }

    public function selectNameWhere($table_name, $field_name, $id){
        //$this->db->select($field_name);
        $this->db->where($id);

        $this->db->from($table_name);

       return $query_result=$this->db->get()->row();
       // $result=$query_result->row();
       // return $result;
    }


    public function getInfo($table, $id) {
        $this->db->select('*');
        $this->db->where('status', 1);
        $this->db->where($id);
        $this->db->from($table);
        
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }

    public function getInfoWtihYear($table, $id, $hajj_year=NULL) {
        $this->db->from($table);
        $this->db->where('status !=', 0);
        if ($hajj_year!=NULL) {
            $this->db->where('hajj_year', $hajj_year);
        }
        
        $this->db->where($id);
        $query = $this->db->get()->row();
        return $query;
    }

    public function getInfoStatus($table, $id) {
        $this->db->from($table);
        $this->db->where('status !=', 0);
        $this->db->where($id);
        $this->db->where('status', 1);
        $query = $this->db->get()->row();
        return $query;
    }

    public function getLastRow($table_name){
        $this->db->from($table_name);
        $this->db->where('status !=', 0);
        $this->db->order_by('id','desc');
        $this->db->limit(1);
        $query = $this->db->get()->row();
        return $query;
    }

    public function selectWhere($table_name, $id, $order = NULL){
        $this->db->select('*');
        $this->db->where($id);

        if (!($order == NULL)) {
            $this->db->order_by($order);
        }

        $this->db->from($table_name);

        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }

    public function check_exist($table_name, $where_1=NULL, $where_2=NULL, $where_3=NULL, $where_4=NULL){
        $this->db->from($table_name);
        if ($where_1!=NULL) {
            $this->db->where($where_1);
        }
        if ($where_2!=NULL) {
            $this->db->where($where_2);
        }
        if ($where_3!=NULL) {
            $this->db->where($where_3);
        }
        if ($where_4!=NULL) {
            $this->db->where($where_4);
        }

        $this->db->where('status !=', 0);

        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;

    }

    /*
    * Imange Manipulation 
    */

    // function do_upload($upload_path, $thumbs_path) {
        
    //     $config = array(
    //         'allowed_types' => 'jpg|jpeg|gif|png',
    //         'upload_path' => $upload_path,
    //         'max_size' => 2000
    //     );
        
    //     $this->load->library('upload', $config);
    //     $this->upload->do_upload();
    //     $image_data = $this->upload->data();
        
    //     $config = array(
    //         'source_image' => $image_data['full_path'],
    //         'new_image' => $thumbs_path,
    //         'maintain_ration' => true,
    //         'width' => 150,
    //         'height' => 100
    //     );
        
    //     $this->load->library('image_lib', $config);
    //     $this->image_lib->resize();
        
    // }
    
    // function get_images() {
        
    //     $files = scandir($this->gallery_path);
    //     $files = array_diff($files, array('.', '..', 'thumbs'));
        
    //     $images = array();
        
    //     foreach ($files as $file) {
    //         $images []= array (
    //             'url' => $this->gallery_path_url . $file,
    //             'thumb_url' => $this->gallery_path_url . 'thumbs/' . $file
    //         );
    //     }
        
    //     return $images;
    // }

    /* --------------------------------------------------- */

    public function payment_report_haji_wise($haji_id){
        $this->db->select('*');
        $this->db->where('haji_id', $haji_id);
        $this->db->from('money_receipt');

        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }

    //public function payment_report_date_wise($start_date, $end_date){

    //     $query="select * from money_receipt where payment_date between '$start_date' and '$end_date' ";
    //     //$query = mysql_query($query);
    //    // $query = mysql_fetch_array($query);
    //     // $this->db->select('*');
    //     // $this->db->where('payment_date <', $start_date);
    //     // $this->db->where('payment_date >', $end_date);
    //     // $this->db->from('money_receipt');

    //     // $query_result=$this->db->get();
    //     // $result=$query_result->result();
    //     //return $query;

    //     $result=$this->db->query($query) ; 
    //     return $result->result() ; 
    // }
    
    public function payment_report_date_wise($start_date, $end_date){
        $this->db->select('*');
        $this->db->select_sum('amount');
        $this->db->where('payment_date >=', $start_date);
        $this->db->where('payment_date <=', $end_date);
        $this->db->group_by('haji_id');
        $this->db->from('money_receipt');

        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;

    }

    public function expense_statement_collection($start_date, $end_date){
        $this->db->select('*');
        $this->db->select_sum('amount');
        $this->db->where('expense_entry_date >=', $start_date);
        $this->db->where('expense_entry_date <=', $end_date);
        $this->db->group_by('expense_head_id');
        $this->db->from('expense_entry');

        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }

    // public function summery_report($start_date, $end_date){
    //     $this->db->select('*, count(payment_date)');
    //     $this->db->select_sum('amount');
    //     $this->db->where('payment_date >=', $start_date);
    //     $this->db->where('payment_date <=', $end_date);
    //     $this->db->group_by('haji_id');
    //     $this->db->from('money_receipt');

    //     $query_result=$this->db->get();

    //      $query1 = $this->db->last_query();
    //     //$this->db->join('expense_entry', 'money_receipt.payment_date', 'expense_entry.id', 'money_receipt.id');

    //     $this->db->select('*');
    //     $this->db->select_sum('amount');
    //     $this->db->where('expense_entry_date >=', $start_date);
    //     $this->db->where('expense_entry_date <=', $end_date);
    //     $this->db->group_by('expense_head_id');
    //     $this->db->from('expense_entry');

    //     $query_result=$this->db->get();

    //     $query2 =  $this->db->last_query();

    //     $query = $this->db->query($query1." UNION ".$query2);

    //     $result=$query_result->result();
    //     return $result;
    // }

//     SELECT Customers.CustomerName, Orders.OrderID
// FROM Customers
// FULL OUTER JOIN Orders
// ON Customers.CustomerID=Orders.CustomerID
// ORDER BY Customers.CustomerName;
    

    // public function summery_report($start_date, $end_date){
    //     $this->db->select('id, haji_id, amount, payment_date');
    //     $this->db->from('money_receipt');
    //     $query1 = $this->db->get()->result();

    //     // Query #2

    //     $this->db->select('id, amount, expense_entry_date');
    //     $this->db->from('expense_entry');
    //     $query2 = $this->db->get()->result_array();

    //     // Merge both query results

    //     $query = array_merge($query1, $query2);
    //     return $query;
    // }

    // public function summery_report($start_date, $end_date){
    //     $this->db->select('haji_id, payment_date, distinct()amount');
    //     $this->db->from('money_receipt');
    //     $this->db->where('payment_date >=', $start_date);
    //     $this->db->where('payment_date <=', $end_date);

    //     $this->db->join('expense_entry', 'expense_entry_date=1');

    //     $query_result=$this->db->get();
    //     $result=$query_result->result();
    //     return $result;
    // }

    // public function summery_report($start_date, $end_date){
    //     $sql = "SELECT expense_entry.expense_name expense_name, expense_entry.expense_entry_date expense_entry_date, money_receipt.payment_date payment_date, money_receipt.haji_id haji_name, money_receipt.amount cash_collection, expense_entry.amount total_expense
    //             from money_receipt,expense_entry 
    //             WHERE money_receipt.payment_date=expense_entry.expense_entry_date 
    //             AND money_receipt.payment_date BETWEEN '$start_date' AND '$end_date'
                
    //             ";

    //     $query_result=$this->db->query($sql);
    //     $result=$query_result->result();
    //     return $result;
    // }


    public function summery_report($start_date, $end_date){
        $sql = "SELECT expense_entry.expense_name expense_name, expense_entry.expense_entry_date expense_entry_date, money_receipt.payment_date payment_date, money_receipt.haji_id haji_name, money_receipt.amount cash_collection, expense_entry.amount total_expense
                from money_receipt,expense_entry 
                WHERE money_receipt.payment_date BETWEEN '$start_date' AND '$end_date'
                and expense_entry.expense_entry_date BETWEEN '$start_date' AND '$end_date'
                GROUP BY money_receipt.payment_date 
                ";

        $query_result=$this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }

    public function summery_report_by_transaction($table_name, $start_date, $end_date){
        $this->db->select('*');
        //$this->db->select_sum('debit');
        $this->db->where('date >=', $start_date);
        $this->db->where('date <=', $end_date);
        //$this->db->group_by('date');
        $this->db->from($table_name);

        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    
}
