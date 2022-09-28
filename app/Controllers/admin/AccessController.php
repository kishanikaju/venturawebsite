<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\admin\AdminModel;
use App\Models\admin\AccessModel;
use App\Models\admin\PrivilegeModel;
use App\Models\admin\FormaccModel;
use App\Models\admin\RoleModel;

class AccessController extends BaseController
{
    public function index()
    {
       
        $data['title'] ="Form Access";
        return view('backend/access_add',$data);
    }
    public function addaccessformprocess()
    {
        $users = new AccessModel();
        $data = [
            'form_name'=>$this->request->getPost('formname'),
            'url' =>$this->request->getPost('url'),
        ];
        $users->save($data);
        return redirect()->to(base_url('admin/access-form-list'))->with('status','Submit sucssesfully');
    }
    public function accessform_list()
    {
        $tbl_formaccess = new FormaccModel();
        $data['tbl_formaccess'] = $tbl_formaccess->findAll();
        return view('backend/access-form-list',$data);
    }
    public function accessform_edit($id)
    {   
        $tbl_formaccess = new FormaccModel();
        $data['title'] ="Edit Form Access";
        $data['tbl_formaccess'] = $tbl_formaccess->find($id);                
        return view('backend/access-form-edit',$data);        
    }
    public function update_accessformprocess($id)
    {
        $users = new AccessModel();
        $data = [
            'form_name'=>$this->request->getPost('formname'),
            'url' =>$this->request->getPost('url'),
        ];
        $users->update($id, $data);
        return redirect()->to(base_url('admin/access-form-list'))->with('status','Update sucssesfully');
    }
    public function delete($id)
    {
        $access = new AccessModel();
        $access->delete($id);
        return redirect()->to(base_url('admin/access-form-list'))->with('status','Delete sucssesfully');
    }
    public function privilege()
    {
        $tbl_rolemaster = new RoleModel();
        $data['tbl_rolemaster'] = $tbl_rolemaster->findAll(); 
        $tbl_formaccess = new FormaccModel();
        $data['tbl_formaccess'] = $tbl_formaccess->findAll(); 
        $data['title'] ="Privilege Access";
        return view('backend/privileges-add',$data);
    }
    public function privilegeprocess()
    {
        $users = new PrivilegeModel();
        $user = $this->request->getPost('user');
       // $status = $this->request->getPost('status');
        $formid = $this->request->getPost('formid');
         for($i=0;$i<count($formid);$i++)
         {
            // echo $status[$i]."<br>";
            // echo $formid[$i]."<br>";
            $data[] = [
                'roleid'=>$user,
                //'status' =>$status[$i],
                'formid' =>$formid[$i],               
            ];            
         }
        $users->insertBatch($data);
        return redirect()->to(base_url('admin/privileges-access'))->with('status','Submit sucssesfully');
    }
    public function privileges_list()
    {
        $tbl_roleaccess = new PrivilegeModel();
        $data['tbl_roleaccess'] = $tbl_roleaccess->findAll();
        $tbl_rolemaster = new RoleModel();
        $data['tbl_rolemaster'] = $tbl_rolemaster->findAll(); 
        $tbl_formaccess = new FormaccModel();
        $data['tbl_formaccess'] = $tbl_formaccess->findAll();
        return view('backend/privileges-list',$data);
    }
    public function pre_delete($id)
    {
        $previlege = new PrivilegeModel();
        $previlege->delete($id);
        return redirect()->to(base_url('admin/privileges-list'))->with('status','Privileges Delete sucssesfully');
    }
}