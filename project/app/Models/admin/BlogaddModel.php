<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class BlogaddModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'blogs';
    protected $primaryKey       = 'blogid';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['blog_title','blog_cat','blog_url','blog_excerpt','blog_contents',
    'blog_tag','blog_ispublished','blog_head_scr','blog_isactive','blog_status','blog_createon',
'blog_createdby','blog_updateon','blog_updatedby','blog_publishon','blog_is_featured',
'blog_meta_title','blog_meta_desc','blog_meta_keyword','blog_view_count','blog_img'];

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
}
