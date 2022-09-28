<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class CmsModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'cms_page';
    protected $primaryKey       = 'cms_id ';
    protected $allowedFields    = ['name','slug','cms_content','cms_image','status','meta_title','meta_des','meta_keyword','header_script','createdon'];

    
}