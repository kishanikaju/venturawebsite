<?php
//namespace App\Models;
namespace App\Models\Admin;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $DBGroup          = 'default';
   // protected $table            = 'admin_user';
    //protected $primaryKey       = 'id';
    protected $table            = 'tbl_usermaster';
    protected $primaryKey       = 'userid';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
   // protected $allowedFields    = ['name','username','password','gender','user_role','phone_no'];
 protected $allowedFields    = ['name','username','password','gender','role','phone_no','status'];
    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
    public function get_role()
    {        
        $query = $this->db->table('tbl_rolemaster')->where('active','Y')->get();
        return $query->getResultArray();
    }
    public function get_privileges($role)
    {     
        $query= $this->db->table('tbl_roleaccess')->select('tbl_roleaccess.formid,tbl_roleaccess.roleid,tbl_formaccess.url')->join('tbl_formaccess', 'tbl_formaccess.formid = tbl_roleaccess.formid')->where('roleid',$role)->get();
        return $query->getResultArray();
        //first check
//         $builder = $this->db->table('tbl_roleaccess');
//         $builder->select('*');
//         $builder->join('tbl_formaccess', 'tbl_formaccess.formid = tbl_roleaccess.formid');
//         $builder->where('roleid',$role);
// //$builder->where('status','Y');
//         $query = $builder->get();
//         $result = $query->getResult();
       //second check
 //$query = $this->db->table('tbl_roleaccess')->join('tbl_formaccess', 'tbl_formaccess.formid = tbl_roleaccess.formid')->where('roleid',$role)->where('status','Y')->get();
       // $result = $query->getResultArray();
        // $query = $this->db->table('tbl_roleaccess')->where('roleid',$role)->where('status','Y')->get();
        // return $query->getResultArray();
        // echo "<pre>";
        // print_r($query);echo "</pre>";
    }
}
