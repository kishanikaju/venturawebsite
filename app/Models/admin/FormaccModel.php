<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class FormaccModel extends Model
{
    public function __construct() {
        parent::__construct();
        $this->table = 'tbl_formaccess';
      }
    protected $DBGroup          = 'default';
    protected $table            = 'tbl_formaccess';
    protected $primaryKey       = 'formid';
    protected $allowedFields    = ['form_name','url','status'];

   // protected $returnType       = 'object';
    
}