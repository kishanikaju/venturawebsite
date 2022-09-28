<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\admin\BlogcatModel;
use App\Models\admin\BlogaddModel;
use App\Models\admin\BlogcommentModel;

class BlogaddController extends BaseController
{
    public function blogadd()
    {
        $blog_category = new BlogcatModel();
        $data['blog_category'] = $blog_category->findAll(); 
        return view('backend/add-blog',$data);
    }
    public function addblogprocess()
    {
        $users = new BlogaddModel();
        $validationRule = [
            'userfile' => [
                'label' => 'Image File',
                'rules' => 'uploaded[userfile]|ext_in[userfile,jpg,jpeg,png]|max_size[userfile,1024]|is_image[userfile]',
                  ],
               ];
        if($this->validate($validationRule)){
            $file = $this->request->getFile('userfile');
            if ($file->isValid() && ! $file->hasMoved()) {
                $imageName = $file->getRandomName();
                     $file->move('uploads/blog/', $imageName);
                    
                }
        }else{
            return redirect()->to(base_url('admin/news-add'))->with('status','*This not Image formate(only jpg,png,jpeg)');
        }
      
       date_default_timezone_set('Asia/Kolkata');
                    $timestamp = date("Y-m-d H:i:s");
        $publishon = $this->request->getPost('publishdate').','.$this->request->getPost('publishtime');
        $data = [
            'blog_title'=>$this->request->getPost('blog_title'),
            'blog_url' =>$this->request->getPost('blog_url'),
            'blog_cat'=>$this->request->getPost('blog_category'),
            // 'blog_excerpt'=>$this->request->getPost('excerpt'),
            'blog_contents'=>$this->request->getPost('content'),
            // 'blog_tag'=>$this->request->getPost('tag'),
            // 'blog_ispublished'=>$this->request->getPost('blog_ispublished'),
            'blog_head_scr'=>$this->request->getPost('headscript'), 
            // 'blog_isactive'=>$this->request->getPost('blog_isactive'),
            'blog_status'=>$this->request->getPost('blog_status'),
            'blog_createon'=>$timestamp,           
            'blog_createdby'=>$this->request->getPost('blog_createdby'),
            //'blog_updateon'=>$this->request->getPost('news_status'),
            // 'blog_updatedby'=>$this->request->getPost('blog_updatedby'),
            // 'blog_publishon'=>$publishon,
            // 'blog_is_featured'=>$this->request->getPost('blog_is_featured'),
            // 'blog_view_count'=>$this->request->getPost('blog_viewcount'),            
            'blog_img'=>$imageName,
            'blog_meta_title'=>$this->request->getPost('metatitle'),
            'blog_meta_desc'=>$this->request->getPost('metadescription'),
            'blog_meta_keyword'=>$this->request->getPost('metakeywords')
            
        ];
        $users->save($data);
        return redirect()->to(base_url('admin/blog-list'))->with('status','Blog Add Submit sucssesfully');
        //print_r($data);
    }
    public function blog_list()
    {
        $blogs = new BlogaddModel();
        $data['blogs'] = $blogs->findAll(); 
        return view('backend/blog-list',$data);
    }
    public function blog_edit($id)
    {   
        $blogs = new BlogaddModel();
        $data['blogs'] = $blogs->find($id); 
        $blog_category = new BlogcatModel();
        $data['blog_category'] = $blog_category->findAll();         
        return view('backend/blog-edit',$data);        
    }
    public function blog_update($id)
    {
        $blogs = new BlogaddModel();
        $validationRule = [
            'userfile' => [
                'label' => 'Image File',
                'rules' => 'uploaded[userfile]|ext_in[userfile,jpg,jpeg,png]|max_size[userfile,1024]|is_image[userfile]',
                  ],
               ];
        if($this->validate($validationRule)){
            $file = $this->request->getFile('userfile');
            if ($file->isValid() && ! $file->hasMoved()) {
                $imageName = $file->getRandomName();
                     $file->move('uploads/blog/', $imageName);
                    
                }
        }else{
            return redirect()->to(base_url('admin/blog-edit/'.$id))->with('status','*This not Image formate(only jpg,png,jpeg)');
        }
        date_default_timezone_set('Asia/Kolkata');
        $timestamp = date("Y-m-d H:i:s");
        $publishon = $this->request->getPost('publishdate').' '.$this->request->getPost('publishtime');
        $data = [
            // 'blog_title'=>$this->request->getPost('blog_title'),
            // 'blog_url' =>$this->request->getPost('blog_url'),
            // 'blog_cat'=>$this->request->getPost('blog_category'),
            // 'blog_excerpt'=>$this->request->getPost('excerpt'),
            // 'blog_contents'=>$this->request->getPost('content'),
            // 'blog_tag'=>$this->request->getPost('tag'),
            // 'blog_ispublished'=>$this->request->getPost('blog_ispublished'),
            // 'blog_head_scr'=>$this->request->getPost('headscript'), 
            // 'blog_isactive'=>$this->request->getPost('blog_isactive'),
            // 'blog_status'=>$this->request->getPost('blog_status'),                      
            // 'blog_createdby'=>$this->request->getPost('blog_createdby'),
            // 'blog_updateon'=>$timestamp, 
            // 'blog_updatedby'=>$this->request->getPost('blog_updatedby'),
            // 'blog_publishon'=>$publishon,
            // 'blog_is_featured'=>$this->request->getPost('blog_is_featured'),
            // 'blog_meta_title'=>$this->request->getPost('metatitle'),
            // 'blog_meta_desc'=>$this->request->getPost('metadescription'),
            // 'blog_meta_keyword'=>$this->request->getPost('metakeywords'),
            // 'blog_view_count'=>$this->request->getPost('blog_viewcount'),            
            // 'blog_img'=>$imageName

            'blog_title'=>$this->request->getPost('blog_title'),
            'blog_url' =>$this->request->getPost('blog_url'),
            'blog_cat'=>$this->request->getPost('blog_category'),
            // 'blog_excerpt'=>$this->request->getPost('excerpt'),
            'blog_contents'=>$this->request->getPost('content'),
            // 'blog_tag'=>$this->request->getPost('tag'),
            // 'blog_ispublished'=>$this->request->getPost('blog_ispublished'),
            'blog_head_scr'=>$this->request->getPost('headscript'), 
            // 'blog_isactive'=>$this->request->getPost('blog_isactive'),
            'blog_status'=>$this->request->getPost('blog_status'),
            'blog_createon'=>$timestamp,           
            'blog_createdby'=>$this->request->getPost('blog_createdby'),
            //'blog_updateon'=>$this->request->getPost('news_status'),
            // 'blog_updatedby'=>$this->request->getPost('blog_updatedby'),
            // 'blog_publishon'=>$publishon,
            // 'blog_is_featured'=>$this->request->getPost('blog_is_featured'),
            // 'blog_view_count'=>$this->request->getPost('blog_viewcount'),            
            'blog_img'=>$imageName,
            'blog_meta_title'=>$this->request->getPost('metatitle'),
            'blog_meta_desc'=>$this->request->getPost('metadescription'),
            'blog_meta_keyword'=>$this->request->getPost('metakeywords')
        ];
        $blogs->update($id, $data);
        return redirect()->to(base_url('admin/blog-list'))->with('status','Blog Update Submit sucssesfully');
        //print_r($data);
    }
    public function delete($id)
    {
        $news = new BlogaddModel();
        $news->delete($id);
        return redirect()->to(base_url('admin/blog-list'))->with('status','Blog Delete sucssesfully');
    }
    public function add_blog_comment($id)
    {   
        $blogs = new BlogaddModel();
        $data['blogs'] = $blogs->find($id); 
        // $blog_comment = new BlogcommentModel();        
        // $data['blog_comment'] = $blog_comment->where('blog_id',$id)->find();              
        return view('backend/add_blog_comment',$data);        
    }
    public function blog_comment_process()
    {
        $blogs = new BlogcommentModel();
        $publishon = $this->request->getPost('publishdate').','.$this->request->getPost('publishtime');
        $data = [
            'blog_title'=>$this->request->getPost('blog'),
            'blog_id' =>$this->request->getPost('blogid'),
            'blog_user'=>$this->request->getPost('user'),
            'blog_parent'=>$this->request->getPost('parent'),
            'blog_comment'=>$this->request->getPost('editor'),
            'blog_created_date'=>$publishon ,
            'blog_approved'=>$this->request->getPost('status') 
        ];
        $blogs->save($data);
        return redirect()->to(base_url('admin/blog-list'))->with('status','Blog Comment Submit sucssesfully');
        //print_r($data);
    }
    public function blog_comment_list()
    {
        $blog_comment = new BlogcommentModel();
        $data['blog_comment'] = $blog_comment->findAll(); 
        return view('backend/blog-comment-list',$data);
    }
    public function blog_comment_edit($id)
    {   
        $blog_comment = new BlogcommentModel();
        $data['blog_comment'] = $blog_comment->find($id);                
        return view('backend/blog-comment-edit',$data);        
    }
    public function blog_comment_update($id)
    {
        $blogs = new BlogcommentModel();
        $publishon = $this->request->getPost('publishdate').','.$this->request->getPost('publishtime');
        $data = [
            'blog_title'=>$this->request->getPost('blog'),
            'blog_id' =>$this->request->getPost('blogid'),
            'blog_user'=>$this->request->getPost('user'),
            'blog_parent'=>$this->request->getPost('parent'),
            'blog_comment'=>$this->request->getPost('editor'),
            'blog_created_date'=>$publishon ,
            'blog_approved'=>$this->request->getPost('status') 
        ];
        $blogs->update($id, $data);
        return redirect()->to(base_url('admin/blog-comment-list'))->with('status','Blog Comment Edit sucssesfully');
        //print_r($data);
    }
    public function commentdelete($id)
    {
        $comment = new BlogcommentModel();
        $comment->delete($id);
        return redirect()->to(base_url('admin/blog-comment-list'))->with('status','Comment Delete sucssesfully');
    }

}