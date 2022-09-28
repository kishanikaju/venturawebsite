<?php

namespace App\Models;

use CodeIgniter\Model;

class SampleModel extends Model
{
     protected $table = 'tbl_sample';
    protected $db;

    public function __construct()
    {
        parent::__construct();
        $this->db = \Config\Database::connect();
        // OR $this->db = db_connect();
    }
    
    public function get_samplelist($where = NULL)
    {     
    $builder= $this->db->table('tbl_sample');
    $builder->select('*')->where('smp_status','Y');
    if($where):$builder->where($where);endif;
         $builder->orderBy('smp_id','DESC');
        $query = $builder->get();
       
    return $query->getResultArray();
    }
    
    public function get_level1_data($where = NULL)
    {       
    //   $query= $this->db->table('tbl_sample')->select('*')->where('smp_status','Y')->where('smp_level','1')->orderBy('smp_id','DESC')->limit(3)->get();   
      $builder= $this->db->table('tbl_sample');
    $builder->select('*')->where('smp_status','Y')->where('smp_level','1');
    if($where):$builder->where($where);endif;
    $builder->orderBy('smp_id','DESC')->limit(3);
    $query = $builder->get();    
        return $query->getResultArray();
    }
    public function get_level2_data()
    {       
       $query= $this->db->table('tbl_sample')->select('*')->where('smp_status','Y')->where('smp_level','2')->orderBy('smp_id','DESC')->limit(3)->get();       
        return $query->getResultArray();
    }
    public function get_level3_data()
    {       
       $query= $this->db->table('tbl_sample')->select('*')->where('smp_status','Y')->where('smp_level','3')->orderBy('smp_id','DESC')->limit(3)->get();       
        return $query->getResultArray();
    }
        
}