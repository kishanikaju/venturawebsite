<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class RoleModel extends Model
{
    public function __construct() {
        parent::__construct();
        $this->table = 'tbl_rolemaster';
      }
    protected $DBGroup          = 'default';
    protected $table            = 'tbl_rolemaster';
    protected $primaryKey       = 'roleid ';
    protected $allowedFields    = ['role','active','status'];

   // protected $returnType       = 'object';
    
}