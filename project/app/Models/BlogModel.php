<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model
{
     protected $table = 'blogs';
    protected $db;

    public function __construct()
    {
        parent::__construct();
        $this->db = \Config\Database::connect();
        // OR $this->db = db_connect();
    }
    public function get_blog_cat()
    {
        $query = $this->db->table('blog_category')->where('blogcat_status','Y')->get();
        return $query->getResultArray();
    }
    public function get_bloglist()
    {
        // $builder = $db->table('blogs');
        // $builder->select('*');
        // $builder->from('mytable');
        // $query = $builder->get();
        // return $query->getResult();
        
        $query= $this->db->table('blogs')->select('*')->where('blog_status','Y')->orderBy('blogid','DESC')->get();
        return $query->getResultArray();
    }
    public function get_blog_data($url)
    {
       // $query= $this->db->table('blogs')->select('*')->where('blog_url',$url)->where('blog_status','Y')->get();
       $query= $this->db->table('blogs')->select('*')->join('blog_category', 'blog_category.blogcatid = blogs.blog_cat')->where('blog_url',$url)->where('blog_status','Y')->get();
       
        return $query->getRow();
    }
    public function get_blog4_data()
    {
       // $query= $this->db->table('blogs')->select('*')->where('blog_url',$url)->where('blog_status','Y')->get();
       $query= $this->db->table('blogs')->select('*')->where('blog_status','Y')->orderBy('blogid','DESC')->limit(3)->get();
       
        return $query->getResultArray();
    }
        
}