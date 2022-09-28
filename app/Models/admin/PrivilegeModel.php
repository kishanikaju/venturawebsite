<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class PrivilegeModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tbl_roleaccess';
    protected $primaryKey       = 'roleaccessid ';
    protected $allowedFields    = ['roleid','formid','status'];

    
}