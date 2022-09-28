<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\admin\CmsModel;

class CmsController extends BaseController
{
    public function index()
    {
        $data['title'] ="Add CMS Pages";
        $session = session();
        if($session->has('role')){
        return view('backend/add-cms',$data);
        }else{
            return view('backend/login');
        }
    }
    public function addcmsprocess()
    {
        $users = new CmsModel();
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
                     $file->move('public/uploads/cms', $imageName);
                    
                }
        }else{
            return redirect()->to(base_url('admin/add-cms'))->with('status','*This not Image formate(only jpg,png,jpeg)');
        }
       $crtdate= $this->request->getPost('publishdate');
       $crttime= $this->request->getPost('publishtime');
        $createdon = $crtdate.','.$crttime;
       
        $data = [
            'name'=>$this->request->getPost('name'),
            'slug' =>$this->request->getPost('slug'),
            'cms_content'=>$this->request->getPost('content'),
            'header_script'=>$this->request->getPost('headscript'),
            'status'=>$this->request->getPost('status'),
            'meta_title'=>$this->request->getPost('metatitle'),
            'meta_des'=>$this->request->getPost('metadescription'),
            'meta_keyword'=>$this->request->getPost('metakeywords'),
            'createdon'=>$createdon,
            
            
            'cms_image'=>$imageName
        ];
        $users->save($data);
        return redirect()->to(base_url('admin/add-cms'))->with('status','Add Submit sucssesfully');
        //print_r($data);
       
    }
    public function cmsform_list()
    {
        $cms_page = new CmsModel();
        $data['cms_page'] = $cms_page->findAll(); 
        $data['title'] ="CMS List";
        $session = session();
        if($session->has('role')){
        return view('backend/cms-list',$data);
        }else{
            return view('backend/login');
        }
    }
    public function cmsform_edit($id)
    {   
        $cms_page = new CmsModel();
        $data['cms_page'] = $cms_page->find($id); 
        $data['title'] ="Edit CMS Page";
        $session = session();
        if($session->has('role')){       
        return view('backend/cms-edit',$data);  
        } else{
            return view('backend/login');
        }     
    }
    public function update_cmsformprocess($id)
    {
        $users = new CmsModel();
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
                     $file->move('public/uploads/cms', $imageName);
                    
                }
        }else{
            return redirect()->to(base_url('admin/cms-edit/'.$id))->with('status','*This not Image formate(only jpg,png,jpeg)');
        }
       $crtdate= $this->request->getPost('publishdate');
       $crttime= $this->request->getPost('publishtime');
        $createdon = $crtdate.','.$crttime;
       
        $data = [
            'name'=>$this->request->getPost('name'),
            'slug' =>$this->request->getPost('slug'),
            'cms_content'=>$this->request->getPost('content'),
            'header_script'=>$this->request->getPost('headscript'),
            'status'=>$this->request->getPost('status'),
            'meta_title'=>$this->request->getPost('metatitle'),
            'meta_des'=>$this->request->getPost('metadescription'),
            'meta_keyword'=>$this->request->getPost('metakeywords'),
            'createdon'=>$createdon,
            
            
            'cms_image'=>$imageName
        ];
        $users->update($id, $data);
        return redirect()->to(base_url('admin/cms-list'))->with('status','Edit Submit sucssesfully');
        //print_r($data);
       
    }
    public function delete($id)
    {
        $cms = new CmsModel();
        $cms->delete($id);
        return redirect()->to(base_url('admin/cms-list'))->with('status','Delete sucssesfully');
    }
}