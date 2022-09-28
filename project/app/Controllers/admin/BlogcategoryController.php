<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\admin\BlogcatModel;

class BlogcategoryController extends BaseController
{
    public function blogcatadd()
    {
        return view('backend/blog-category-add');
    }
    public function blogcategory_list()
    {
        $blog_category = new BlogcatModel();
        $data['blog_category'] = $blog_category->findAll(); 
        return view('backend/blog-category-list',$data);
    }
    public function addblogcat()
    {
        $users = new BlogcatModel();
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
                     $file->move('public/uploads/blogcategory', $imageName);
                    
                }
        }else{
            return redirect()->to(base_url('admin/blog-category-add'))->with('status','*This not Image formate(only jpg,png,jpeg)');
        }
        $data = [
            'blogcat_name'=>$this->request->getPost('name'),
            'blogcat_slug' =>$this->request->getPost('slug'),
            'blogcat_parent'=>$this->request->getPost('parent'),
            'blogcat_description'=>$this->request->getPost('editor'),
            'blogcat_meta_title'=>$this->request->getPost('metatitle'),
            'blogcat_meta_desc'=>$this->request->getPost('metadescription'),
            'blogcat_meta_key'=>$this->request->getPost('metakeywords'),
            'blogcat_head_script'=>$this->request->getPost('headscript'),
            'blogcat_status'=>'N',
            'blogcat_img'=>$imageName
        ];
        $users->save($data);
        return redirect()->to(base_url('admin/blog-category-list'))->with('status','Blog Category Submit sucssesfully');
        //print_r($data);
    }
    public function blog_cat_edit($id)
    {   
        $blog_category = new BlogcatModel();
        $data['blog_category'] = $blog_category->find($id);
        
        return view('backend/blog-category-edit',$data);
        
    }
    public function delete($id)
    {
        $users = new BlogcatModel();
        $users->delete($id);
        return redirect()->to(base_url('admin/blog-category-list'))->with('status','Blog category Delete sucssesfully');
    }
    public function blog_cat_update($id){
        $users = new BlogcatModel();
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
                     $file->move('public/uploads/blogcategory', $imageName);
                    
                }
        }else{
            return redirect()->to(base_url('admin/blog-category-edit/'.$id))->with('status','*This not Image formate(only jpg,png,jpeg)');
        }
        $data = [
            'blogcat_name'=>$this->request->getPost('name'),
            'blogcat_slug' =>$this->request->getPost('slug'),
            'blogcat_parent'=>$this->request->getPost('parent'),
            'blogcat_description'=>$this->request->getPost('editor'),
            'blogcat_meta_title'=>$this->request->getPost('metatitle'),
            'blogcat_meta_desc'=>$this->request->getPost('metadescription'),
            'blogcat_meta_key'=>$this->request->getPost('metakeywords'),
            'blogcat_head_script'=>$this->request->getPost('headscript'),
            'blogcat_status'=>'N',
            'blogcat_img'=>$imageName
        ];
        $users->update($id, $data);
        return redirect()->to(base_url('admin/blog-category-list'))->with('status','Blog Category Submit sucssesfully');
        //print_r($data);
    }
}